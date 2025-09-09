<?php
class KatalogView extends KatalogController
{
    public function show()
    {
        $products = $this->getProducts(); // ambil semua tanaman

        foreach ($products as $product) { ?>
            <tr>
                <td><?= htmlspecialchars($product['id']); ?></td>
                <td><?= htmlspecialchars($product['nama']); ?></td>
                <td><?= htmlspecialchars($product['kategori']); ?></td>
                <td><?= htmlspecialchars($product['manfaat']); ?></td>
            </tr>
        <?php
        }
    }

    public function find()
    {
        $detailProduct = $this->getKatalogBy(); // ambil detail tanaman

        if (empty($detailProduct)) {
            echo "<p>Data tanaman tidak ditemukan.</p>";
            return;
        }

        foreach ($detailProduct as $detail) { ?>
            <div>
                <h3><?= htmlspecialchars($detail['nama']); ?></h3>
                <p>Kategori: <?= htmlspecialchars($detail['kategori']); ?></p>
                <p>Manfaat: <?= htmlspecialchars($detail['manfaat']); ?></p>
            </div>
        <?php
        }
    }
}
?>