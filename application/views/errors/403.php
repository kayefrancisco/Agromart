 <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>403 Forbidden</h2>
        </div>
        <!-- CODE TO DISPLAY MESSAGE -->
         <?php if($this->session->flashdata('status')): ?>
            <div class="form-btn" style="justify-content: center; height: 35px; display: flex; color: crimson; padding: 1%; font-weight: 500;">
               <?= $this->session->flashdata('status'); ?>
            </div>
         <?php endif; ?>
      </div>
    </section><!-- End About Us Section -->
