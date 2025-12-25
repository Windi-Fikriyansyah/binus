<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial History</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        body {
            background-color: #ffffff;
        }

        .status-bar {
            background-color: #0099cc;
            color: white;
            padding: 4px 16px;
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }

        .header {
            padding: 16px;
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .back-button {
            color: #000;
            font-size: 24px;
            text-decoration: none;
        }

        .page-title {
            font-size: 20px;
            color: #333;
        }

        .main-title {
            font-size: 28px;
            padding: 16px;
            font-weight: bold;
        }

        .info-banner {
            background-color: #666;
            color: white;
            padding: 12px 16px;
            margin: 0 16px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .info-icon {
            font-size: 20px;
        }

        .filter-section {
            display: flex;
            gap: 16px;
            padding: 16px;
        }

        .filter-button {
            background-color: #f5f5f5;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
            color: #333;
        }

        .semester-title {
            padding: 16px;
            font-size: 18px;
            color: #333;
        }

        .payment-list {
            padding: 0 16px;
        }

        .payment-item {
            display: flex;
            justify-content: space-between;
            align-items: start;
            padding: 16px 0;
            border-bottom: 1px solid #eee;
        }

        .payment-info {
            display: flex;
            gap: 12px;
        }

        .status-icon {
            width: 26px;
            height: 26px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 14px;
        }

        /* Upcoming (orange clock) */
        .status-icon.upcoming {
            background-color: #ff9f1c;
        }

        /* Paid (green check) */
        .status-icon.paid {
            background-color: #4CAF50;
        }

        /* Overdue (red exclamation) */
        .status-icon.overdue {
            background-color: #ff3b30;
        }


        .payment-details {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .payment-title {
            font-weight: 500;
            color: #333;
        }

        .payment-status {
            color: #666;
            font-size: 14px;
        }

        .payment-amount {
            text-align: right;
        }

        .amount {
            font-weight: 500;
            color: #333;
        }

        .due-date {
            color: #666;
            font-size: 14px;
        }
    </style>
</head>

<body>


    <div class="header">
        <a href="{{ route('student.financial') }}" class="back-button"><i class="fas fa-chevron-left"></i></a>
        <h1 class="page-title">Financial Summary</h1>
    </div>

    <h2 class="main-title">Financial History</h2>

    <div class="info-banner">
        <span class="info-icon"><i class="fa-solid fa-circle-info"></i></span>
        <span>All time format below is in GMT+7</span>
    </div>

    <div class="filter-section">
        <button class="filter-button">
            All Term
            <i class="fa-solid fa-chevron-down"></i>
        </button>
        <button class="filter-button">
            All Category
            <i class="fa-solid fa-chevron-down"></i>
        </button>
    </div>

    {{-- <h3 class="semester-title">2026, Odd Semester</h3>

    <div class="payment-list">
        @foreach ($evenSemesterPayments2026 as $payment)
            <div class="payment-item">
                <div class="payment-info">
                    <div class="status-icon {{ strtolower($payment->status) }}">
                        @if ($payment->status === 'Upcoming')
                            <i class="fa-solid fa-clock"></i>
                        @elseif ($payment->status === 'Paid' || $payment->status === 'paid')
                            <i class="fa-solid fa-check"></i>
                        @elseif ($payment->status === 'Overdue')
                            <i class="fa-solid fa-exclamation"></i>
                        @endif
                    </div>

                    <div class="payment-details">
                        <div class="payment-title">{{ $payment->title }}</div>
                        <div class="payment-status">{{ $payment->status }}</div>
                    </div>
                </div>
                <div class="payment-amount">
                    <div class="amount">{{ $payment->nominal }}</div>
                    <div class="due-date">{{ $payment->tanggal }}</div>
                </div>
            </div>
        @endforeach
    </div> --}}

    <h3 class="semester-title">2025, Even Semester</h3>

    <div class="payment-list">
        @foreach ($evenSemesterPayments2025 as $payment)
            <div class="payment-item">
                <div class="payment-info">
                    <div class="status-icon {{ strtolower($payment->status) }}">
                        @if ($payment->status === 'Upcoming')
                            <i class="fa-solid fa-clock"></i>
                        @elseif ($payment->status === 'Paid' || $payment->status === 'paid')
                            <i class="fa-solid fa-check"></i>
                        @elseif ($payment->status === 'Overdue')
                            <i class="fa-solid fa-exclamation"></i>
                        @endif
                    </div>
                    <div class="payment-details">
                        <div class="payment-title">{{ $payment->title }}</div>
                        <div class="payment-status">{{ $payment->status }}</div>
                    </div>
                </div>
                <div class="payment-amount">
                    <div class="amount">{{ $payment->nominal }}</div>
                    <div class="due-date">{{ $payment->tanggal }}</div>
                </div>
            </div>
        @endforeach
    </div>

    <h3 class="semester-title">2025, Odd Semester</h3>

    <div class="payment-list">
        @foreach ($oddSemesterPayments2025 as $payment)
            <div class="payment-item">
                <div class="payment-info">
                    <div class="status-icon {{ strtolower($payment->status) }}">
                        @if ($payment->status === 'Upcoming')
                            <i class="fa-solid fa-clock"></i>
                        @elseif ($payment->status === 'Paid' || $payment->status === 'paid')
                            <i class="fa-solid fa-check"></i>
                        @elseif ($payment->status === 'Overdue')
                            <i class="fa-solid fa-exclamation"></i>
                        @endif
                    </div>
                    <div class="payment-details">
                        <div class="payment-title">{{ $payment->title }}</div>
                        <div class="payment-status">{{ $payment->status }}</div>
                    </div>
                </div>
                <div class="payment-amount">
                    <div class="amount">{{ $payment->nominal }}</div>
                    <div class="due-date">{{ $payment->tanggal }}</div>
                </div>
            </div>
        @endforeach
    </div>

    <h3 class="semester-title">2024, Even Semester</h3>

    <div class="payment-list">
        @foreach ($evenSemesterPayments as $payment)
            <div class="payment-item">
                <div class="payment-info">
                    <div class="status-icon {{ strtolower($payment->status) }}">
                        {{ $payment->status == 'Overdue' ? '!' : ($payment->status == 'paid' ? '✓' : '') }}
                    </div>
                    <div class="payment-details">
                        <div class="payment-title">{{ $payment->title }}</div>
                        <div class="payment-status">{{ $payment->status }}</div>
                    </div>
                </div>
                <div class="payment-amount">
                    <div class="amount">{{ $payment->nominal }}</div>
                    <div class="due-date">{{ $payment->tanggal }}</div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Data untuk Odd Semester -->
    <h3 class="semester-title">2024, Odd Semester</h3>

    <div class="payment-list">
        @foreach ($oddSemesterPayments as $payment)
            <div class="payment-item">
                <div class="payment-info">
                    <div class="status-icon {{ strtolower($payment->status) }}">
                        {{ $payment->status == 'Overdue' ? '!' : ($payment->status == 'paid' ? '✓' : '') }}
                    </div>
                    <div class="payment-details">
                        <div class="payment-title">{{ $payment->title }}</div>
                        <div class="payment-status">{{ $payment->status }}</div>
                    </div>
                </div>
                <div class="payment-amount">
                    <div class="amount">{{ $payment->nominal }}</div>
                    <div class="due-date">{{ $payment->tanggal }}</div>
                </div>
            </div>
        @endforeach
    </div>

    <h3 class="semester-title">2023, Even Semester</h3>

    <div class="payment-list">
        @foreach ($eventSemesterPayments2023 as $payment)
            <div class="payment-item">
                <div class="payment-info">
                    <div class="status-icon {{ strtolower($payment->status) }}">
                        {{ $payment->status == 'Overdue' ? '!' : ($payment->status == 'paid' ? '✓' : '') }}
                    </div>
                    <div class="payment-details">
                        <div class="payment-title">{{ $payment->title }}</div>
                        <div class="payment-status">{{ $payment->status }}</div>
                    </div>
                </div>
                <div class="payment-amount">
                    <div class="amount">{{ $payment->nominal }}</div>
                    <div class="due-date">{{ $payment->tanggal }}</div>
                </div>
            </div>
        @endforeach
    </div>

    <h3 class="semester-title">2023, Odd Semester</h3>

    <div class="payment-list">
        @foreach ($oddSemesterPayments2023 as $payment)
            <div class="payment-item">
                <div class="payment-info">
                    <div class="status-icon {{ strtolower($payment->status) }}">
                        {{ $payment->status == 'Overdue' ? '!' : ($payment->status == 'paid' ? '✓' : '') }}
                    </div>
                    <div class="payment-details">
                        <div class="payment-title">{{ $payment->title }}</div>
                        <div class="payment-status">{{ $payment->status }}</div>
                    </div>
                </div>
                <div class="payment-amount">
                    <div class="amount">{{ $payment->nominal }}</div>
                    <div class="due-date">{{ $payment->tanggal }}</div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
