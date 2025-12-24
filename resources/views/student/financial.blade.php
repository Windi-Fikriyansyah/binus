<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }



        body {
            background-color: #f5f5f5;
        }

        .status-bar {
            background-color: #157fb1;
            color: white;
            padding: 4px 16px;
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }


        .header {
            background-color: #157fb1;
            color: white;
            padding: 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .back-button {
            color: white;
            font-size: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .back-button i {
            font-size: 20px;
        }

        .history-button {
            background-color: white;
            color: #157fb1;
            padding: 8px 16px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .financial-summary {
            background-color: #157fb1;
            color: white;
            padding: 20px 16px;
            padding-bottom: 100px;
            border-bottom-left-radius: 20px; /* Radius hanya di bawah kiri */
    border-bottom-right-radius: 20px; /* Radius hanya di bawah kanan */
    margin: 0; /* Pastikan tidak ada margin agar menyatu dengan header */
    overflow: hidden; /
        }

        .summary-label {
            font-size: 14px;
            margin-bottom: 8px;
        }

        .amount {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 16px;
        }

        .status-cards {
                display: flex;
                gap: 16px;
                padding: 16px;
                background-color: white;
                border-radius: 12px;
                margin: -80px 16px 16px; /* Mengangkat card agar overlap dengan background biru */
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan untuk kesan floating */
            }

            .status-card {
                flex: 1;
                text-align: center;
                padding: 16px;
                border-radius: 12px;
            }

            .status-icon {
                background-color: #ff9933;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 8px;
                color: white;
                font-size: 20px;
            }

        .status-amount {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 4px;
        }

        .status-label {
            color: #666;
            font-size: 14px;
        }

        .overdue-section {
            padding: 16px;
        }

        .overdue-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 16px;
        }

        .payment-card {
    background-color: #d93830;
    color: white;
    padding: 16px;
    border-radius: 12px;
    margin-bottom: 16px;
    position: relative;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 8px;
}

.card-header i {
    font-size: 18px;
    color: white;
}

.semester-tag {
    background-color: white;
    color: black;
    padding: 4px 12px;
    border-radius: 16px;
    display: inline-block;
    font-size: 14px;
}

.show-detail {
    margin-top: 12px;
    text-align: center;
}

.show-detail hr {
    border: 1px solid white;
    margin: 10px 0;
    width: 100%;  /* Membuat garis penuh */
}

.show-detail-link {
    color: white;
    font-weight: bold;
    text-decoration: none;
}

.show-detail-link:hover {
    color: #ccc;  /* Warna saat hover */
}


        .payment-title {
            font-size: 18px;
            margin-bottom: 8px;
        }

        .payment-amount {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .payment-due {
            font-size: 14px;
            opacity: 0.9;
        }

    </style>
</head>
<body>
    <div class="status-bar">

    </div>

    <div class="header">
        <a href="{{ route('student.academy') }}" class="back-button" style="text-decoration: none; color: white;">
            <i class="fas fa-chevron-left"></i>
            Academic Services
        </a>
        <a href="{{ route('student.summary') }}" style="text-decoration: none;" class="history-button">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span>History</span>
        </a>
    </div>

    <div class="financial-summary">
        <div class="summary-label">Total Charge</div>
        <div class="amount">Rp215,961,000.00</div>

        <div class="summary-label">Total Payment</div>
        <div class="amount">Rp207,561,000.00</div>
    </div>

    <div class="status-cards">
        <div class="status-card">
            <div class="status-icon">
                <i class="fas fa-hourglass-half"></i>
            </div>
            <div class="status-amount">Rp8,400,000.00 </div>
            <div class="status-label">Outstanding</div>
        </div>
        <div class="status-card">
            <div class="status-icon">
                <i class="fas fa-wallet"></i>
            </div>
            <div class="status-amount">Rp0.00</div>
            <div class="status-label">Deposit</div>
        </div>
    </div>

    <div class="overdue-section">
        <div class="overdue-header">
            <h2>Overdue Payment</h2>
            <a href="#" style="color: black; font-weight: bold; text-decoration: none;">See All</a>
        </div>
        @foreach ($overdue as $payment)
        <div class="payment-card">

            <div class="card-header">

                <div class="semester-tag">{{ $payment->jenis }}</div>
                <i class="fa-solid fa-clock-rotate-left"></i>
            </div>
            <div class="payment-title">{{ $payment->title }}</div>
            <div class="payment-amount">{{ $payment->nominal }}</div>
            <div class="payment-due">{{ $payment->tanggal }}</div>
            <div class="show-detail">
                <hr>
                <a href="#" class="show-detail-link">Show Detail</a>
            </div>

        </div>
        @endforeach




    </div>
</body>
</html>
