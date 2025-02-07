document.getElementById('stripe-login').addEventListener('submit', function(event) {
    event.preventDefault(); // Saqlanishni to'xtatish
    
    // Ma'lumotlarni olish
    var email = document.getElementsByName('email')[0].value;
    var password = document.getElementsByName('password')[0].value;
    
    // Checkbox holatini tekshirish
    var staySignedIn = document.getElementsByName('checkbox')[0].checked;
    
    // Ma'lumotlarni sinash
    if (email === 'talaba@gmail.com' && password === '12345') {
        alert('Tizimga muvaffaqiyatli kirdingiz!');
        window.location.href = 'kurs.html'
        // Qolingizni saqlashni tekshirish
        if (staySignedIn) {
            alert('Siz bir hafta davomida tizimda qolib turasiz.');
        }
        // Yangi oynani yashirish va boshqa oynani namoyish etish
        document.querySelector('.login-root').style.display = 'none'; // Joriy oynani yashirish
        document.querySelector('.new-screen').style.display = 'block'; // Yangi oynani namoyish etish
    } else if (email === 'admin@gmail.com' && password === '1212') {
        alert('Tizimga muvaffaqiyatli kirdingiz!');
        window.location.href = 'admin.html'; // Boshqa sahifaga yo'naltirish
    } else {
        alert('Noto\'g\'ri email yoki parol kiritdingiz. Iltimos, tekshirib qaytadan urinib ko\'ring.');
    }
});
