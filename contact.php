<?php include 'header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>Reach Us</h1>
        <p>Be in touch with us. We'd love to hear from you!</p>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info-box">
                <h3>Contact Information</h3>
                
                <!-- Email -->
                <div class="contact-detail">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <strong>Email</strong>
                        <p><a href="mailto:inquiry@2enapps.my">inquiry@2enapps.my</a></p>
                    </div>
                </div>

                <!-- Phone -->
                <div class="contact-detail">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-text">
                        <strong>Phone</strong>
                        <p>+603-1234 5678</p>
                    </div>
                </div>

                <!-- Address -->
                <div class="contact-detail">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">
                        <strong>Address</strong>
                        <p>2en Apps Sdn Bhd.<br>F-2-6, Blok F, Jalan GC 3, Glomac Cyberjaya, 63000 Cyberjaya, Selangor</p>
                    </div>
                </div>
            </div>

            <div class="contact-form-box">
                <h3>Send Us a Message</h3>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = htmlspecialchars($_POST['name']);
                    $email = htmlspecialchars($_POST['email']);
                    $message = htmlspecialchars($_POST['message']);
                    
                    echo '<div class="success-message">';
                    echo '<i class="fas fa-check-circle"></i>';
                    echo "<h4>Thank you, $name!</h4>";
                    echo "<p>We've received your message. We'll get back to you at $email within 24 hours.</p>";
                    echo '</div>';
                } else {
                ?>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn-primary">Send Message <i class="fas fa-paper-plane"></i></button>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>