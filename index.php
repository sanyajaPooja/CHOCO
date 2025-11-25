<?php $pageTitle = "LevelUpFood - Delicious Food Anytime"; ?>
<?php include 'header.php'; ?>

    <!-- Renamed class from banner-section-bg-container -->
    <div class="hero-section d-flex flex-column justify-content-center">
        
        <div class="hero-section d-flex flex-column justify-content-center">
        <div class="container text-center">
            <h1 class="hero-title mb-3">Get Delicious Chocolate!</h1>
            <p class="hero-subtitle mb-4">Sweet & Healthy</p>
            <?php if (!isset($_SESSION['email']) || $_SESSION['email'] == 'unset'): ?>
                <a href="login.php" class="btn btn-primary btn-lg">Login Now</a>
            <?php else: ?>
                 <a href="dashboard.php" class="btn btn-primary btn-lg">View Menu</a>
            <?php endif; ?>
        </div>
    </div>
    </div>

<?php include 'footar.php'; ?>