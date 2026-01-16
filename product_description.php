<?php 
    include "hedare.php"; 
    if (isset($_GET['id'])) {
    foreach ($cards as $card) {
        if ($card['id'] == $_GET['id']) {
            $product = $card;
            break;
        }
    }
}

?>

<section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 hero-content mt-2">
                <h3 class="fw-bold mb-3">
                    <b><?php echo $product['title']; ?></b>
                </h3>
            </div>
        </div>
    </div>
</section>

<div class="container d-flex align-items-center mb-5">
    <div class="row justify-content-center w-100 mt-5">

        <div class="col-lg-7 mt-3">
            <div class="submitform p-4 text-center">
                <img src="<?php echo $product['image']; ?>" class="img-fluid mx-auto" alt="PCC Panel">
            </div>
            <?php if(!empty($product['data'])){ ?>
                <h4 class="mt-3"><?php echo $product['title']; ?></h4>
                <div class="why-decoration">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="line"></span>
                </div> 
            <?php } ?>
            <div style="color:#666"><?php echo $product['data']; ?></div>
            <div>
                <?php if(!empty($product['Specification'])){ ?>
                    <h4><b>Specification</b></h4>
                    <div class="why-decoration">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="line"></span>
                    </div>
                <?php } ?>
                <?php echo $product['Specification']; ?>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="submitform mt-3">
                <h4><b>Get a Quote</b></h4>
                <div class="why-decoration">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="line"></span>
                </div>
                <p class="text-secondary">Our team will get in touch with you within 24 hours.</p>
                <form action="send_mail.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Message</label>
                        <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                    </div>

                    <button type="submit" name="send" class="btn btn-custom w-100 py-2">
                        Send Now
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include "footer.php"; ?>