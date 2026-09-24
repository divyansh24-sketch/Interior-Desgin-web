<!-- views/partials/login-modal.php -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4 p-3 bg-white" style="background-color: #FBF9F4 !important;">
            
            <!-- Modal Header: Minimal & Editorial -->
            <div class="modal-header border-0 pb-0 pt-3 px-4">
                <div>
                    <span class="text-uppercase fw-bold" style="letter-spacing: 2px; font-size: 0.65rem; color: #596044;">✦ D.STUDIO CONCIERGE ✦</span>
                    <h3 class="fw-bold text-dark mt-1 editorial-serif mb-0" id="bookingModalLabel" style="font-family: 'Playfair Display', serif;">Reserve Consultation</h3>
                </div>
                <button type="button" class="btn-close shadow-none mt-1" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <!-- Modal Body (Form) -->
            <div class="modal-body p-4">
                <p class="text-muted small mb-4 fw-light">Complete the details below to secure your architectural session with our elite design experts.</p>
                
                <form action="../process-booking.php" method="POST">
                    
                    <!-- Selected Design / Service Dropdown (Select Option Enabled) -->
                    <div class="mb-3">
                        <label for="designName" class="form-label text-dark small fw-bold text-uppercase" style="letter-spacing: 1px; font-size: 0.7rem;">Select Masterpiece / Service *</label>
                        <select class="form-select form-select-md bg-light border-0 text-dark fw-semibold rounded-3 shadow-none py-3 modal-input" id="designName" name="design_name" required>
                            <option value="" selected disabled>Choose a service or masterpiece...</option>
                            <optgroup label="Core Architectural Services">
                                <option value="Spatial Blueprinting Service">Spatial Blueprinting</option>
                                <option value="Signature Styling Service">Signature Styling</option>
                                <option value="Bespoke Millwork Service">Bespoke Millwork</option>
                                <option value="Full Interior Design">Full Interior Design</option>
                                <option value="Space Planning & Layout">Space Planning & Layout</option>
                                <option value="Renovation & Makeover">Renovation & Makeover</option>
                                <option value="Custom Furniture">Custom Furniture</option>
                                <option value="Lighting Design">Lighting Design</option>
                            </optgroup>
                            <optgroup label="Curated Masterpieces">
                                <option value="The Grand Horizon Penthouse">The Grand Horizon (Penthouse Suite)</option>
                                <option value="Serene Oak Sanctuary">Serene Oak Sanctuary (Villa)</option>
                                <option value="Avant-Garde Culinary Kitchen">Avant-Garde Culinary (Kitchen)</option>
                                <option value="Monochrome Executive Lounge">Monochrome Elegance (Lounge)</option>
                                <option value="Industrial Heritage Loft">Industrial Heritage Loft</option>
                                <option value="The Regal Suite">The Regal Suite</option>
                            </optgroup>
                            <option value="General Consultation">General Consultation</option>
                        </select>
                    </div>
                    
                    <!-- User Name -->
                    <div class="mb-3">
                        <label for="userName" class="form-label text-dark small fw-bold text-uppercase" style="letter-spacing: 1px; font-size: 0.7rem;">Your Full Name *</label>
                        <input type="text" class="form-control form-control-md bg-light border-0 rounded-3 shadow-none py-3 modal-input" id="userName" name="user_name" placeholder="Enter your full name" required>
                    </div>
                    
                    <!-- User Email -->
                    <div class="mb-3">
                        <label for="userEmail" class="form-label text-dark small fw-bold text-uppercase" style="letter-spacing: 1px; font-size: 0.7rem;">Email Address *</label>
                        <input type="email" class="form-control form-control-md bg-light border-0 rounded-3 shadow-none py-3 modal-input" id="userEmail" name="user_email" placeholder="name@example.com" required>
                    </div>
                    
                    <!-- User Phone -->
                    <div class="mb-4">
                        <label for="userPhone" class="form-label text-dark small fw-bold text-uppercase" style="letter-spacing: 1px; font-size: 0.7rem;">Phone Number *</label>
                        <input type="tel" class="form-control form-control-md bg-light border-0 rounded-3 shadow-none py-3 modal-input" id="userPhone" name="user_phone" placeholder="Enter your phone number" required>
                    </div>
                    
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-dark btn-md w-100 py-3 fw-bold rounded-pill shadow-sm modal-submit-btn">
                        Submit Request &rarr;
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS for Modal Styling & Smooth Animation -->
<style>
    .modal.fade .modal-dialog {
        transform: scale(0.92) translateY(-10px);
        transition: transform 0.35s cubic-bezier(0.165, 0.84, 0.44, 1), opacity 0.3s ease;
    }
    .modal.show .modal-dialog {
        transform: scale(1) translateY(0);
    }
    .modal-input {
        transition: all 0.3s ease;
    }
    .modal-input:focus {
        background-color: #ffffff !important;
        box-shadow: 0 0 0 2px #20211F !important;
    }
    .modal-submit-btn {
        background-color: #20211F;
        border: none;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
    }
    .modal-submit-btn:hover {
        background-color: #596044;
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }
</style>

<!-- JavaScript to automatically match and select the option passed from buttons -->
<script>
    const bookingModal = document.getElementById('bookingModal');
    if (bookingModal) {
        bookingModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            const designName = button ? button.getAttribute('data-design') : null;
            const selectDropdown = bookingModal.querySelector('#designName');
            
            if (designName && selectDropdown) {
                // Check if option exists in dropdown, if so select it
                let optionExists = false;
                for (let i = 0; i < selectDropdown.options.length; i++) {
                    if (selectDropdown.options[i].value === designName || selectDropdown.options[i].text.includes(designName)) {
                        selectDropdown.selectedIndex = i;
                        optionExists = true;
                        break;
                    }
                }
                // If not found in list, add it dynamically and select it
                if (!optionExists) {
                    const newOpt = document.createElement('option');
                    newOpt.value = designName;
                    newOpt.text = designName;
                    selectDropdown.add(newOpt);
                    selectDropdown.value = designName;
                }
            }
        });
    }
</script>