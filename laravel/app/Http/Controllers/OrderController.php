<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Hiển thị danh sách các đơn hàng
    public function index()
    {
        $orders = Order::all(); // Lấy tất cả đơn hàng
        return view('orders.index', compact('orders'));
    }

    // Hiển thị form tạo đơn hàng mới
    public function create()
    {
        $users = User::all(); // Lấy tất cả người dùng
        return view('orders.create', compact('users'));
    }

    // Lưu đơn hàng mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        // Validate dữ liệu từ form
        $request->validate([
            'user_id' => 'required|exists:users,id', // Kiểm tra nếu người dùng tồn tại
            'order_number' => 'required|unique:orders,order_number',
            'total' => 'required|numeric',
            'status' => 'required|string',
        ]);

        // Tạo đơn hàng mới
        Order::create([
            'user_id' => $request->user_id,
            'order_number' => $request->order_number,
            'total' => $request->total,
            'status' => $request->status,
        ]);

        return redirect()->route('orders.index')->with('success', 'Đơn hàng đã được tạo thành công!');
    }

    // Hiển thị form chỉnh sửa đơn hàng
    public function edit($id)
    {
        $order = Order::findOrFail($id); // Lấy đơn hàng cần chỉnh sửa
        $users = User::all(); // Lấy tất cả người dùng
        return view('orders.edit', compact('order', 'users'));
    }

    // Cập nhật thông tin đơn hàng
    public function update(Request $request, $id)
    {
        // Validate dữ liệu từ form
        $request->validate([
            'user_id' => 'required|exists:users,id', // Kiểm tra nếu người dùng tồn tại
            'order_number' => 'required|unique:orders,order_number,' . $id,
            'total' => 'required|numeric',
            'status' => 'required|string',
        ]);

        // Lấy đơn hàng cần cập nhật
        $order = Order::findOrFail($id);

        // Cập nhật đơn hàng
        $order->update([
            'user_id' => $request->user_id,
            'order_number' => $request->order_number,
            'total' => $request->total,
            'status' => $request->status,
        ]);

        return redirect()->route('orders.index')->with('success', 'Đơn hàng đã được cập nhật!');
    }

    // Xóa đơn hàng
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Đơn hàng đã được xóa!');
    }


    public function show($id)
    {
        $order = Order::with('orderNotes')->findOrFail($id);
        return view('orders.show', compact('order'));
    }


}
