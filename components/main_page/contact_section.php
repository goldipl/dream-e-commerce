<section class="contact-section">
  <div class="contact-container">
    
    <!-- Left Column: Form -->
    <div class="form-wrapper">
      <h2 class="section-heading">Szukasz idealnego rozwiązania?</h2>
      <p class="section-subheading">Skontaktuj się z naszym działem sprzedaży.</p>
      
      <form class="contact-form">
        <div class="form-group full-width">
          <input type="text" id="name" placeholder=" " required />
          <label for="name">Imię i Nazwisko</label>
        </div>
        
        <div class="form-row">
          <div class="form-group">
            <input type="email" id="email" placeholder=" " required />
            <label for="email">Email</label>
          </div>
          <div class="form-group">
            <input type="text" id="company" placeholder=" " />
            <label for="company">Nazwa firmy</label>
          </div>
        </div>
        
        <div class="form-group full-width">
          <textarea id="message" placeholder=" " rows="5" required></textarea>
          <label for="message">Treść wiadomości</label>
        </div>
        
        <div class="form-footer">
          <label class="checkbox-container">
            <input type="checkbox" required />
            <span class="checkmark"></span>
            <span class="checkbox-text">
              Cras euismod ante ut ante porta posuere. Aenean accumsan nisl sed congue sodales.
            </span>
          </label>
          
          <button type="submit" class="submit-btn">Wyślij</button>
        </div>
      </form>
    </div>
    
    <!-- Right Column: Showroom Info & Google Map -->
    <div class="showroom-wrapper">
      <h3 class="showroom-heading">Lub odwiedź nasz Showroom!</h3>
      
      <div class="map-container">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2446.5290947704537!2d20.925565177265938!3d52.17926217197825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4719337d6c8f9507%3A0xfe9492ec34ffa3f1!2sSzyszkowa%2032%2C%2002-285%20Warszawa!5e0!3m2!1spl!2spl!4v1710000000000!5m2!1spl!2spl" 
          width="100%" 
          height="100%" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
      
      <div class="address-info">
        <!-- SVG Pin Icon aligned with the font layout -->
        <svg class="pin-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
        <span class="address-text">Szyszkowa 32, 02-285 Warszawa</span>
      </div>
    </div>
    
  </div>
</section>