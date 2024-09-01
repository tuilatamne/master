<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $id = $_POST['id'];
    if ($_POST['action'] == 'status')
    {
        $status = $_POST['status'];
        $_SESSION['cart'][$id]['status'] = $status;
    }
    if ($_POST['action'] == 'delete')
    {
        unset($_SESSION['cart'][$id]);
    }
    if ($_POST['action'] == 'change')
    {
        $quantity = $_POST['quantity'];
        $_SESSION['cart'][$id]['quantity'] = $quantity;
    }
}