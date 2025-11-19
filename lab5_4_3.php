<fieldset>
    <legend>Form thong tin thanh vien</legend>
    <form action="" method="get">
        <label for="">Ten dang nhap</label><br>
        <input type="text" name="account" required> <br>
        <label for="">Mat khau</label><br>
        <input type="password" name="pwd" required> <br>
        <label for="">Nhap lai mat khau</label><br>
        <input type="password" name="repwd" required> <br>
        <label for="">Nam</label>
        <input type="radio" value="Nam" name="gt" required>
        <label for="">Nu</label>
        <input type="radio" value="Nu" name="gt">
        <label for="">So thich</label><br>
        <input type="text" name="st"><br>
        <label for="">hinh anh</label><br>
        <input type="file" name="img" accept=""> <br>
        <label for="">Tinh</label>
        <select name="tinh" required>
            <option value="">Ha Noi</option>
            <option value="">Ho Chi Minh</option>
            <option value="">An Giang</option>
            <option value="">Tien Giang</option>
            <option value="">Thanh Hoa</option>
        </select><br>
        <input type="submit" name="Gui">
        <input type="reset" name="Xoa">
    </form>
</fieldset>

<?php 
if (isset($_GET['account']))
    echo"<br>ten la: ".$_GET['account'];
?>