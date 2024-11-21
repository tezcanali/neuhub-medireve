// Form ID'si ile formu seçiyoruz
const form = document.querySelector('#contactForm');  // Form ID'si 'contactForm' ise bunu kullanın

// Telefon inputu için intlTelInput fonksiyonunu başlatıyoruz
const input = document.querySelector("#phone");
const iti = window.intlTelInput(input, {
    initialCountry: "gb",          // Varsayılan olarak Birleşik Krallık
    preferredCountries: ["gb", "us", "de"], // Tercih edilen ülkeler
    separateDialCode: true,        // Alan kodunu ayrı göster
    formatOnDisplay: true,         // Telefon numarasını formatla
    autoPlaceholder: "polite",     // Nazik placeholder göster
    customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
        return "e.g. " + selectedCountryPlaceholder;
    },
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/utils.js", // Utils scriptini kullan
});

// Form gönderildiğinde ülke kodunu telefon numarasına eklemek
form.addEventListener('submit', function(e) {
    const phoneInput = document.querySelector("#phone");

    // Seçilen ülke kodu ile tam telefon numarasını al
    const fullPhoneNumber = iti.getNumber();

    // Tam telefon numarasını geri input alanına yerleştir
    phoneInput.value = fullPhoneNumber;

    // Geçerli bir telefon numarası olup olmadığını kontrol et
    if (!iti.isValidNumber()) {
        e.preventDefault();  // Form gönderimini durdur
        alert("Geçersiz telefon numarası.");
    }
});


let allCountriesData = [];

// JSON formatındaki tüm ülke verilerini CDN'den çek
fetch('https://cdn.jsdelivr.net/gh/mledoze/countries/countries.json')
    .then(response => response.json())
    .then(data => {
        allCountriesData = data; // Tüm ülkeleri al
        loadDefaultCountries();  // İlk olarak sadece UK ve US göster
    })
    .catch(error => console.error('Ülke verileri yüklenemedi:', error));

const countrySelect = document.getElementById('countrySelect');
const flagIcon = document.querySelector('.input-group-text i');

// Varsayılan olarak UK ve US gösterilsin
function loadDefaultCountries() {
    countrySelect.innerHTML = ''; // Seçenekleri temizle
    const defaultCountries = allCountriesData.filter(country => country.cca2 === 'GB' || country.cca2 === 'US');
    defaultCountries.forEach(country => {
        const option = document.createElement('option');
        option.value = country.name.common; // Ülke adı değer olarak atanıyor
        option.textContent = country.name.common; // Ülke adı
        option.setAttribute('data-flag', `flag-icon-${country.cca2.toLowerCase()}`);
        countrySelect.appendChild(option);
    });
    countrySelect.value = 'United Kingdom'; // Varsayılan olarak İngiltere seçili
    flagIcon.className = 'flag-icon flag-icon-gb'; // İngiltere bayrağı varsayılan
}

// Tüm ülkeleri göster
function loadAllCountries() {
    countrySelect.innerHTML = ''; // Seçenekleri temizle
    allCountriesData.forEach(country => {
        const option = document.createElement('option');
        option.value = country.name.common; // Ülke adı değer olarak atanıyor
        option.textContent = country.name.common; // Ülke adı
        option.setAttribute('data-flag', `flag-icon-${country.cca2.toLowerCase()}`);
        countrySelect.appendChild(option);
    });
    countrySelect.value = 'United Kingdom'; // Varsayılan olarak İngiltere seçili
    flagIcon.className = 'flag-icon flag-icon-gb'; // İngiltere bayrağı varsayılan
}

// Telefon numarası input kısmındaki ülke değişiminde bunu çağırın
function updateCountryListBasedOnPhone(dialCode) {
    if (dialCode === "44") {
        loadDefaultCountries(); // Sadece UK ve US göster
    } else {
        loadAllCountries(); // Tüm ülkeleri göster
    }
}

// Seçim değiştiğinde bayrağı güncelle
countrySelect.addEventListener('change', function () {
    const selectedOption = countrySelect.options[countrySelect.selectedIndex];
    const flagClass = selectedOption.getAttribute('data-flag');
    flagIcon.className = 'flag-icon ' + flagClass;
});

// Telefon numarası inputu kısmından gelen ülke kodunu kontrol edin ve listeyi güncelleyin
// intl-tel-input'tan gelen countrychange event'i ile kodu tetikleyin.
document.getElementById('phone').addEventListener('countrychange', function (e) {
    const dialCode = iti.getSelectedCountryData().dialCode;
    updateCountryListBasedOnPhone(dialCode);
});

