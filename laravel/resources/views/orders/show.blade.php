<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">🧾 Chi tiết đơn hàng #{{ $order->order_number }}</h4>
        </div>
        <div class="card-body">
            <p><strong>🧭 Trạng thái:</strong>
                <span class="badge bg-warning text-dark text-capitalize">
                    {{ $order->status }}
                </span>
            </p>

            <p><strong>💰 Tổng tiền:</strong>
                <span class="text-danger fw-bold">{{ number_format($order->total) }}đ</span>
            </p>

            <hr>

            <h5 class="mt-4">📝 Ghi chú đơn hàng:</h5>
            <ul class="list-group">
                @forelse($order->orderNotes as $note)
                    <li class="list-group-item">{{ $note->note }}</li>
                @empty
                    <li class="list-group-item text-muted">Không có ghi chú nào.</li>
                @endforelse
            </ul>

            <div class="mt-4 text-end">
                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                    ← Quay lại
                </a>
            </div>
        </div>
    </div>
</div>

</body>
</html>