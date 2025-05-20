<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NPL Registration Status</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/closereg.css') }}">
<link rel="stylesheet" href="{{ asset('css/closereg.css') }}">
  
  <style>
    :root {
      --primary-color: #0ea5e9;
      --primary-dark: #0369a1;
      --primary-light: #e0f2fe;
      --text-dark: #0f172a;
      --text-medium: #334155;
      --text-light: #64748b;
      --background: #f8fafc;
      --card-bg: #ffffff;
      --border-color: #e2e8f0;
      --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
      --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
      --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
      --radius-sm: 0.375rem;
      --radius-md: 0.5rem;
      --radius-lg: 0.75rem;
      --radius-xl: 1rem;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    }
    
    html {
      font-size: 16px;
    }
    
    @media (max-width: 768px) {
      html {
        font-size: 15px;
      }
    }
    
    @media (max-width: 480px) {
      html {
        font-size: 14px;
      }
    }
    
    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: clamp(1rem, 5vw, 3rem);
      background: linear-gradient(145deg, var(--background) 0%, #dbeafe 100%);
      color: var(--text-dark);
      line-height: 1.6;
    }
    
    
  </style>
</head>
<body>
  <div class="notification-card">
    <div class="notification-icon">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
        <path d="M12 8v4"></path>
        <path d="M12 16h.01"></path>
      </svg>
    </div>
    
    <h1 class="notification-title">  Registration is Closed now </h1>
    
    <div class="notification-message">
      <p>
       we have got over response. We will further arrange this training soon. Thank you
      </p>
     
    </div>
  </div>
</body>
</html>
