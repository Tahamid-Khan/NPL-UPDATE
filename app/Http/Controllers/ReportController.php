<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Event;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function downloadReunionReport()
    {
        // Sample data for alumni reunion
        $reunion = [
            'title' => 'BIBM Alumni Reunion 2025',
            'date' => 'May 20-22, 2025',
            'venue' => 'BIBM Campus, Dhaka',
            'theme' => 'Reconnecting Memories, Building Futures',
            
            'attendees' => [
                'total_registered' => 285,
                'breakdown' => [
                    ['batch' => '1995-1997', 'count' => 42, 'fee' => 5000],
                    ['batch' => '1998-2000', 'count' => 58, 'fee' => 4500],
                    ['batch' => '2001-2003', 'count' => 67, 'fee' => 4000],
                    ['batch' => '2004-2006', 'count' => 53, 'fee' => 3500],
                    ['batch' => '2007-2009', 'count' => 45, 'fee' => 3000],
                    ['batch' => '2010-2012', 'count' => 20, 'fee' => 2500],
                ],
                'spouses' => 85,
                'spouse_fee' => 2000,
                'early_bird_discount' => 15, // percentage
            ],
            
            'income_sources' => [
                ['name' => 'Registration Fees', 'amount' => 0, 'calculated' => true],
                ['name' => 'Sponsorships', 'amount' => 125000],
                ['name' => 'Merchandise Sales', 'amount' => 87500],
                ['name' => 'Donations', 'amount' => 45000],
            ],
            
            'expense_categories' => [
                ['name' => 'Venue & Decor', 'amount' => 175000],
                ['name' => 'Catering', 'amount' => 225000],
                ['name' => 'Entertainment', 'amount' => 85000],
                ['name' => 'Marketing & Promotion', 'amount' => 65000],
                ['name' => 'Staffing', 'amount' => 55000],
                ['name' => 'Security', 'amount' => 35000],
                ['name' => 'Photography/Videography', 'amount' => 45000],
                ['name' => 'Souvenirs & Gifts', 'amount' => 95000],
                ['name' => 'Miscellaneous', 'amount' => 25000],
            ],
            
            'additional_info' => [
                'early_bird_registrations' => 142,
                'regular_registrations' => 143,
                'total_attendees' => 370, // alumni + spouses
                'registration_coverage' => '85% of target',
            ]
        ];

        // Calculate registration fees
        $total_registration_fee = 0;
        foreach ($reunion['attendees']['breakdown'] as $batch) {
            $batch_fee = $batch['count'] * $batch['fee'];
            // Apply early bird discount to first half of each batch
            $early_birds = min(floor($batch['count']/2), $reunion['additional_info']['early_bird_registrations']);
            $discount = $early_birds * ($batch['fee'] * $reunion['attendees']['early_bird_discount']/100);
            $batch_fee -= $discount;
            $total_registration_fee += $batch_fee;
        }
        
        // Add spouse fees
        $total_registration_fee += $reunion['attendees']['spouses'] * $reunion['attendees']['spouse_fee'];
        
        // Set calculated registration fee
        foreach ($reunion['income_sources'] as &$source) {
            if ($source['name'] === 'Registration Fees') {
                $source['amount'] = $total_registration_fee;
            }
        }
        
        // Calculate totals
        $totalIncome = array_sum(array_column($reunion['income_sources'], 'amount'));
        $totalExpenses = array_sum(array_column($reunion['expense_categories'], 'amount'));
        $totalProfit = $totalIncome - $totalExpenses;
        
        // Calculate per attendee metrics
        $revenuePerAttendee = $totalIncome / $reunion['additional_info']['total_attendees'];
        $costPerAttendee = $totalExpenses / $reunion['additional_info']['total_attendees'];
        
        // Generate PDF
        $pdf = PDF::loadView('reports.reunion_financial', [
            'reunion' => $reunion,
            'totalIncome' => $totalIncome,
            'totalExpenses' => $totalExpenses,
            'totalProfit' => $totalProfit,
            'revenuePerAttendee' => $revenuePerAttendee,
            'costPerAttendee' => $costPerAttendee,
            'generatedDate' => Carbon::now()->format('F d, Y H:i'),
            'preparedBy' => 'BIBM Finance Committee'
        ]);

        return $pdf->download('BIBM_Reunion_Financial_Report_2025.pdf');
    }
}