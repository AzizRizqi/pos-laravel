<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 20px;
        }

        .struk {
            width: 80mm;
            max-width: 100%;
            border: 1px solid black;
            padding: 10px;
            margin: 0 auto;
        }

        .struk-header,
        .struk-footer {
            text-align: center;
            margin-bottom: 10px;
        }

        .struk-header h1 {
            font-size: 18px;
            margin: 0;
        }

        .struk-body {
            margin-bottom: 10px;
        }

        .struk-body table {
            width: 100%;
            border-collapse: collapse;
        }

        .struk-body table th,
        .struk-body table td {
            padding: 5px;
            text-align: left;
        }

        .struk-body table th {
            border-bottom: 1px solid black;

        }

        .total,
        .payment,
        .change {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
        }

        .total {
            font-weight: bold;
            border-top: 1px solid black;
            margin-top: 10px;

        }

        @media print{
            body{
                margin:0;
                padding:0;
            }
            .struk{
                width: auto;
                border: none;
                margin:0;
                padding:0;
            }
            .struk-header h1,
            .struk-footer{
                font-size: 14px;
            }
            .struk-body table th,
            .struk-body table td{
                padding: 2px 0;
            }
        }
    </style>
</head>

<body>
    <div class="struk">
        <div class="struk-header">
            <h1>Toko Jaya Abadi</h1>
            <p>Jl. Karet Benhil Kota Jakarta</p>
            <p>Telp (021) 9823479</p>
        </div>
        <div class="struk-body">
            <table>
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detail_sales as $detail)
                    <tr>
                        <td>{{ $detail->product->product_name }}</td>
                        <td>{{ $detail->qty }}</td>
                        <td>{{ 'Rp.' . number_format($detail->product->product_price) }}</td>
                        <td>{{ 'Rp.' . number_format($detail->sub_total) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="total">
                <span>Total:</span>
                <span>{{'Rp' . number_format($sales->trans_total_price)}}</span>
            </div>
            <div class="payment">
                <span>Bayar:</span>
                <span>{{ 'Rp' . number_format($sales->trans_paid) }}</span>
            </div>
            <div class="change">
                <span>Kembali:</span>
                <span>{{ 'Rp' . number_format($sales->trans_change) }}</span>
            </div>
        </div>
        <div class="struk-footer">
            <p>Terima Kasih Atas Kunjungan Anda!</p>
            <p>Selamat Datang Kembali</p>
        </div>
    </div>
</body>

</html>
<script>
    window.onload = function() {
        window.print();
    };
</script>
