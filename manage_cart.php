<?php
session_start();


if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
           $myitems=array_column($_SESSION['cart'],'product_code');
           if(in_array($_POST['product_code'], $myitems))
            {
              echo "<script>
              alert('Item Already Selected');
              window.location.href='dashboard.php';
              </script>";  
            }
            else 
            {
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('product_code'=>$_POST['product_code'],'product_price'=>$_POST['product_price'], 'Quantity'=>1);
                echo "<script>
                    alert('Item Already Selected');
                    window.location.href='dashboard.php';
                </script>"; 
            }
           
        }
        else
        {
            $_SESSION['cart'][0]=array('product_code'=>$_POST['product_code'],'product_price'=>$_POST['product_price'], 'Quantity'=>1);
            echo "<script>
              alert('Item  Added');
              window.location.href='dashboard.php';
              </script>";
        }
    }
    if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['product_code']==$_POST['product_code'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo "<script>
                    alert('Item Removed');
                    window.location.href='mycart.php';
                </script>";
            }
        }
    }
}




?>