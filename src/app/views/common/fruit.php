<div>
    <div class="d-flex flex-column h-100 rounded position-relative fruite-item">
        <div class="fruite-img" style="height: 200px;">
            <img src="<?= htmlspecialchars($fruit['Image']) ?>" class="w-100 h-100"
                alt="<?= htmlspecialchars($fruit['Name']) ?>">
        </div>
        <div class=" text-white bg-secondary px-3 py-1 rounded
                                                    position-absolute" style="top: 10px; left: 10px;">
            <?= htmlspecialchars($fruit['Type']) ?>
        </div>
        <div
            class="d-flex flex-column justify-content-between flex-grow-1 p-4 border border-secondary border-top-0 rounded-bottom">
            <a href="<?php echo BASE_URL ?>/shopDetail/index/<?= htmlspecialchars($fruit['Id']) ?>"
                class="text-decoration-none text-dark fw-bold fs-5">
                <?= htmlspecialchars($fruit['Name']) ?>
            </a>
            <p><?= htmlspecialchars($fruit['Description']) ?></p>
            <p class="text-dark fs-5 fw-bold mb-0">
                <?= htmlspecialchars($fruit['Price']) ?> VNĐ / KG</p>

            <button type="submit"
                class="btn d-flex align-items-center border border-secondary rounded-pill px-3 text-primary btn-add-cart"
                data-id="<?= htmlspecialchars($fruit['Id']) ?>" data-name="<?= htmlspecialchars($fruit['Name']) ?>"
                data-img="<?= htmlspecialchars($fruit['Image']) ?>"
                data-price="<?= htmlspecialchars($fruit['Price']) ?>"
                data-description="<?= htmlspecialchars($fruit['Description']) ?>">
                <i class="fa fa-shopping-bag me-2 text-primary"></i>
                <span class="flex-grow-1 text-primary">Thêm vào giỏ hàng</span>
            </button>
        </div>
    </div>
</div>