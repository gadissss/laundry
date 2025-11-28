<style>
        .footer {
            background: linear-gradient(135deg, #e3f2fd 0%, #f5faff 100%);
            border-top: 4px solid #2196f3;
            color: #333;
        }
        .footer-logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2196f3;
        }
        .social-icon {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #2196f3;
            color: white;
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
            margin-right: 10px;
        }
        .social-icon:hover {
            background-color: #1976d2;
            transform: translateY(-3px);
            color: white;
        }
        .footer-link {
            color: #6c757d;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .footer-link:hover {
            color: #2196f3;
        }
        .payment-badge {
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 20px;
            padding: 8px 12px;
            margin: 5px 5px 5px 0;
            display: inline-block;
            font-size: 0.85rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .contact-icon {
            color: #2196f3;
            margin-right: 10px;
            font-size: 1.2rem;
        }
    </style>

<footer class="footer pt-5 pb-4 mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <h4 class="footer-logo mb-3">
                    <i class="bi bi-water me-2"></i>Crystal Laundry
                </h4>
                <p class="text-muted">Layanan laundry premium dengan teknologi pencucian modern. Pakaian Anda bersih, wangi, dan siap pakai dalam waktu singkat. Kebersihan terjamin!</p>
            </div>

           
            <div class="col-lg-2 col-md-6 mb-4">
                <h5 class="fw-bold mb-3 text-dark">Layanan Kami</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link"><i class="bi bi-check-circle me-2"></i>Laundry Kiloan</a></li>
                    <li><a href="#" class="footer-link"><i class="bi bi-check-circle me-2"></i>Dry Cleaning</a></li>
                    <li><a href="#" class="footer-link"><i class="bi bi-check-circle me-2"></i>Cuci Sepatu</a></li>
                    <li><a href="#" class="footer-link"><i class="bi bi-check-circle me-2"></i>Laundry Karpet</a></li>
                    <li><a href="#" class="footer-link"><i class="bi bi-check-circle me-2"></i>Service Express</a></li>
                </ul>
            </div>

            
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="fw-bold mb-3 text-dark">Hubungi Kami</h5>
                <div class="contact-item">
                    <i class="bi bi-geo-alt contact-icon"></i>
                    <span class="text-muted">Jl. Bersih No. 456, Bandung</span>
                </div>
                <div class="contact-item">
                    <i class="bi bi-telephone contact-icon"></i>
                    <span class="text-muted">+62 22-1234567</span>
                </div>
                <div class="contact-item">
                    <i class="bi bi-envelope contact-icon"></i>
                    <span class="text-muted">hello@crystallundry.id</span>
                </div>
                <div class="contact-item">
                    <i class="bi bi-clock contact-icon"></i>
                    <span class="text-muted">24/7 Customer Support</span>
                </div>
            </div>

        
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="fw-bold mb-3 text-dark">Pembayaran</h5>
                <div class="mb-3">
                    <span class="payment-badge">BCA</span>
                    <span class="payment-badge">BNI</span>
                    <br>
                    <span class="payment-badge">Mandiri</span>
                    <span class="payment-badge">BRI</span>
                    <br>
                    <span class="payment-badge">GoPay</span>
                    <span class="payment-badge">OVO</span>
                    <br>
                    <span class="payment-badge">ShopeePay</span>
                </div>
                <h6 class="fw-bold mb-2 text-dark">Jam Buka</h6>
                <p class="text-muted small mb-0">
                    Senin-Jumat: 07:00 - 21:00<br>
                    Sabtu-Minggu: 08:00 - 20:00
                </p>
            </div>
        </div>

        <hr class="my-4 border-secondary">

        
        <div class="row align-items-center">
            <div class="col-md-6 mb-3">
                <p class="text-muted mb-0">&copy; 2024 Crystal Laundry. Semua hak dilindungi.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="#" class="footer-link me-3">Kebijakan Privasi</a>
                <a href="#" class="footer-link me-3">Syarat & Ketentuan</a>
                <a href="#" class="footer-link">FAQ</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>