<?php
class KatalogView extends KatalogController
{
    public function show()
    {
        $products = $this->getProducts(); // call func controller product

        foreach ($products as $product) { ?>
            <tr>
                <td><?php echo $product['id']; ?></td>
                <td><?php echo $product['nama']; ?></td>
                <td><?php echo $product['kategori']; ?></td>
                <td><?php echo $product['manfaat']; ?></td>
            </tr>
            <?php
        }
    }

    public function find()
    {
        $detailProduct = $this->getKatalogBy(); // call func controller product

        if (empty($detailProduct)) {
            return;
        }

        foreach ($detailProduct as $detail) { ?>
            <div>
                <h3><?php echo $detail['name']; ?></h3>
                <p>kategori: <?php echo $detail['kategori']; ?></p>
                <p>manfaat: <?php echo $detail['manfaat']; ?></p>
            </div>
            <?php
        }
    }

}
?>