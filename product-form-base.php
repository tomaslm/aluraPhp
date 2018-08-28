<tr>
            <td>Name: </td>
            <td> <input class="form-control" type="text"
                    name="name" value="<?=$product['name']?>">
            </td>
        </tr>
        <tr>
            <td>Price: </td>
            <td><input class="form-control" type="number"
                    step="0.01" name="price"
                    value="<?=$product['price']?>"></td>
        </tr>
        <tr>
            <td>Description: </td>
            <td><textarea class="form-control"
                    name="description"><?=$product['description']?></textarea></td>
        </tr>
        <tr>
            <td>Category: </td>
            <td>
                <select name="category_id" class="form-control">
                    <?php
foreach (listCategories($conn) as $category) {
    $choosenCategory = $product['category_id'] == $category['id'];
    $selectedCategory = $choosenCategory ? "selected='selected'" : "";
    ?>
                    <option value="<?=$category['id']?>"
                        <?=$selectedCategory?> >
                        <?=$category['name']?>
                    </option>
                    <?php }?>
                </select>

            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox" name="used"
                    <?=$used?>>Used</td>
        </tr>
        <tr>
            <td colspan=2><input class="
                        btn btn-primary"
                    type="submit" value="Change">
            </td>
        </tr>