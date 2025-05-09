<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BIBM Alumni Reunion Financial Report</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap');
        
        body {
            font-family: 'Montserrat', Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
            background-color: #f9f9f9;
        }
        .page {
            padding: 30px 40px;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #2c3e50;
            padding-bottom: 20px;
        }
        .logo {
            font-size: 28px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 5px;
            letter-spacing: 1px;
        }
        .sub-logo {
            font-size: 16px;
            color: #7f8c8d;
            margin-bottom: 15px;
            font-weight: 300;
        }
        .report-title {
            font-size: 24px;
            margin: 15px 0 5px;
            color: #3498db;
            font-weight: 600;
        }
        .report-subtitle {
            font-size: 16px;
            color: #7f8c8d;
            margin-bottom: 10px;
            font-weight: 400;
        }
        .report-meta {
            display: flex;
            justify-content: space-between;
            margin: 20px 0 30px;
            font-size: 14px;
            color: #7f8c8d;
        }
        .meta-box {
            padding: 10px 15px;
            background: #f5f5f5;
            border-radius: 4px;
            flex: 1;
            margin: 0 5px;
            text-align: center;
        }
        .meta-box strong {
            display: block;
            color: #2c3e50;
            font-size: 16px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 14px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
        }
        th {
            background-color: #2c3e50;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 0.5px;
            padding: 12px 15px;
            text-align: left;
        }
        td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            vertical-align: top;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .amount {
            text-align: right;
            font-family: 'Courier New', monospace;
            font-weight: 600;
        }
        .total-row {
            font-weight: 700;
            background-color: #f8f9fa;
        }
        .total-row td {
            border-top: 2px solid #ddd;
            border-bottom: none;
        }
        .profit {
            color: #27ae60;
        }
        .loss {
            color: #e74c3c;
        }
        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
            margin: 30px 0 15px;
            padding-bottom: 8px;
            border-bottom: 1px solid #eee;
        }
        .summary-card {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 4px;
            align-items: center;
        }
        .summary-card .label {
            font-weight: 600;
            color: #7f8c8d;
        }
        .summary-card .value {
            font-size: 18px;
            font-weight: 700;
            font-family: 'Courier New', monospace;
        }
        .summary-card.profit .value {
            color: #27ae60;
        }
        .summary-card.loss .value {
            color: #e74c3c;
        }
        .chart-container {
            margin: 30px 0;
            padding: 20px;
            background: white;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #95a5a6;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }
        .badge {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: 600;
            margin-left: 5px;
        }
        .badge-success {
            background-color: #d5f5e3;
            color: #27ae60;
        }
        .badge-warning {
            background-color: #fef5e7;
            color: #f39c12;
        }
        .badge-danger {
            background-color: #fadbd8;
            color: #e74c3c;
        }
        .text-muted {
            color: #95a5a6;
            font-size: 13px;
        }
        .signature-area {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
        }
        .signature-box {
            width: 200px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
            text-align: center;
            font-size: 13px;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="header">
            <div class="logo">BIBM ALUMNI NETWORK</div>
            <div class="sub-logo">Bangladesh Institute of Bank Management</div>
            <div class="report-title">Financial Report</div>
            <div class="report-subtitle">{{ $reunion['title'] }} • {{ $reunion['date'] }}</div>
        </div>
        
        <div class="report-meta">
            <div class="meta-box">
                <span>Report Date</span>
                <strong>{{ $generatedDate }}</strong>
            </div>
            <div class="meta-box">
                <span>Total Attendees</span>
                <strong>{{ number_format($reunion['additional_info']['total_attendees']) }}</strong>
            </div>
            <div class="meta-box">
                <span>Registration Coverage</span>
                <strong>{{ $reunion['additional_info']['registration_coverage'] }}</strong>
            </div>
            <div class="meta-box">
                <span>Prepared By</span>
                <strong>{{ $preparedBy }}</strong>
            </div>
        </div>
        
        <h3 class="section-title">Event Overview</h3>
        <div style="display: flex; margin-bottom: 20px;">
            <div style="flex: 1; padding-right: 15px;">
                <p><strong>Theme:</strong> {{ $reunion['theme'] }}</p>
                <p><strong>Venue:</strong> {{ $reunion['venue'] }}</p>
                <p><strong>Date:</strong> {{ $reunion['date'] }}</p>
            </div>
            <div style="flex: 1; padding-left: 15px;">
                <p><strong>Total Alumni Registered:</strong> {{ number_format($reunion['attendees']['total_registered']) }}</p>
                <p><strong>Spouses/Guests:</strong> {{ number_format($reunion['attendees']['spouses']) }}</p>
                <p><strong>Early Bird Registrations:</strong> {{ number_format($reunion['additional_info']['early_bird_registrations']) }} ({{ number_format($reunion['attendees']['early_bird_discount']) }}% discount)</p>
            </div>
        </div>
        
        <h3 class="section-title">Registration Details by Batch</h3>
        <table>
            <thead>
                <tr>
                    <th>Batch Year</th>
                    <th>Alumni Count</th>
                    <th class="amount">Fee per Alumni</th>
                    <th class="amount">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reunion['attendees']['breakdown'] as $batch)
                <tr>
                    <td>{{ $batch['batch'] }}</td>
                    <td>{{ number_format($batch['count']) }}</td>
                    <td class="amount">TK {{ number_format($batch['fee']) }}</td>
                    <td class="amount">TK {{ number_format($batch['count'] * $batch['fee']) }}</td>
                </tr>
                @endforeach
                <tr class="total-row">
                    <td colspan="2">Total Alumni Fees</td>
                    <td class="amount"></td>
                    <td class="amount">TK {{ number_format(array_reduce($reunion['attendees']['breakdown'], function($carry, $item) { return $carry + ($item['count'] * $item['fee']); }, 0)) }}</td>
                </tr>
                <tr>
                    <td colspan="2">Spouse/Guest Fees ({{ number_format($reunion['attendees']['spouses']) }} attendees)</td>
                    <td class="amount">TK {{ number_format($reunion['attendees']['spouse_fee']) }}</td>
                    <td class="amount">TK {{ number_format($reunion['attendees']['spouses'] * $reunion['attendees']['spouse_fee']) }}</td>
                </tr>
                <tr>
                    <td colspan="2">Early Bird Discount ({{ number_format($reunion['attendees']['early_bird_discount']) }}%)</td>
                    <td class="amount"></td>
                    <td class="amount loss">-TK {{ number_format(array_reduce($reunion['attendees']['breakdown'], function($carry, $item) use ($reunion) { 
                        $early_birds = min(floor($item['count']/2), $reunion['additional_info']['early_bird_registrations']);
                        return $carry + ($early_birds * ($item['fee'] * $reunion['attendees']['early_bird_discount']/100));
                    }, 0)) }}</td>
                </tr>
                <tr class="total-row">
                    <td colspan="3">Total Registration Revenue</td>
                    <td class="amount">TK {{ number_format($reunion['income_sources'][0]['amount']) }}</td>
                </tr>
            </tbody>
        </table>
        
        <h3 class="section-title">Income Breakdown</h3>
        <table>
            <thead>
                <tr>
                    <th>Income Source</th>
                    <th class="amount">Amount (TK)</th>
                    <th>Percentage</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reunion['income_sources'] as $source)
                <tr>
                    <td>{{ $source['name'] }}</td>
                    <td class="amount">TK {{ number_format($source['amount']) }}</td>
                    <td>{{ round(($source['amount'] / $totalIncome) * 100, 1) }}%</td>
                </tr>
                @endforeach
                <tr class="total-row">
                    <td>Total Income</td>
                    <td class="amount">TK {{ number_format($totalIncome) }}</td>
                    <td>100%</td>
                </tr>
            </tbody>
        </table>
        
        <h3 class="section-title">Expense Breakdown</h3>
        <table>
            <thead>
                <tr>
                    <th>Expense Category</th>
                    <th class="amount">Amount (TK)</th>
                    <th>Percentage</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reunion['expense_categories'] as $expense)
                <tr>
                    <td>{{ $expense['name'] }}</td>
                    <td class="amount">TK {{ number_format($expense['amount']) }}</td>
                    <td>{{ round(($expense['amount'] / $totalExpenses) * 100, 1) }}%</td>
                </tr>
                @endforeach
                <tr class="total-row">
                    <td>Total Expenses</td>
                    <td class="amount">TK {{ number_format($totalExpenses) }}</td>
                    <td>100%</td>
                </tr>
            </tbody>
        </table>
        
        <h3 class="section-title">Financial Summary</h3>
        <div class="summary-card {{ $totalProfit >= 0 ? 'profit' : 'loss' }}">
            <span class="label">Net Profit/Loss</span>
            <span class="value">TK {{ number_format($totalProfit) }}</span>
        </div>
        
        <div style="display: flex; gap: 15px; margin-bottom: 30px;">
            <div style="flex: 1;" class="summary-card">
                <span class="label">Revenue per Attendee</span>
                <span class="value">TK {{ number_format($revenuePerAttendee) }}</span>
            </div>
            <div style="flex: 1;" class="summary-card">
                <span class="label">Cost per Attendee</span>
                <span class="value">TK {{ number_format($costPerAttendee) }}</span>
            </div>
        </div>
        
        <div style="background: #f8f9fa; padding: 20px; border-radius: 4px; margin: 30px 0;">
            <h4 style="margin-top: 0; color: #2c3e50;">Key Observations</h4>
            <ul style="margin-bottom: 0;">
                <li>The event achieved {{ $reunion['additional_info']['registration_coverage'] }} of its attendance target.</li>
                <li>Registration fees accounted for {{ round(($reunion['income_sources'][0]['amount'] / $totalIncome) * 100, 1) }}% of total revenue.</li>
                <li>The largest expense category was Catering at TK{{ number_format($reunion['expense_categories'][1]['amount']) }} ({{ round(($reunion['expense_categories'][1]['amount'] / $totalExpenses) * 100, 1) }}% of total expenses).</li>
                <li>{{ $totalProfit >= 0 ? 'The event was financially successful with a net profit.' : 'The event resulted in a net loss.' }}</li>
            </ul>
        </div>
        
        <div class="signature-area">
            <div class="signature-box">Prepared By</div>
            <div class="signature-box">Reviewed By</div>
            <div class="signature-box">Approved By</div>
        </div>
        
        <div class="footer">
            <p>This report contains confidential financial information for BIBM Alumni Reunion 2025.</p>
            <p>© {{ date('Y') }} Bangladesh Institute of Bank Management. All rights reserved.</p>
        </div>
    </div>
</body>
</html>