<form action="proses_tambah.php" method="post" onsubmit="return validateForm()">
    <table>
        <tr>
            <td>Category Name</td>
            <td><input type="text" name="category_name" id="category_name">
                <span id="error_category_name" class="error"></span>
            </td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Tambah"></td>
        </tr>
    </table>
</form>

<script>
function validateForm() {
    var category_name = document.getElementById("category_name").value;
    var isValid = true;

    if (category_name === "") {
        isValid = false;
        document.getElementById("category_name").style.border = "1px solid red";
        document.getElementById("error_category_name").textContent = "Category name is required.";
    } else {
        document.getElementById("error_category_name").textContent = "";
    }


    return isValid;
}
</script>