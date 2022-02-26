function loadNav() {
    let header = document.getElementById('header')
    header.className = 'nav-body'
const logo = document.createElement('div')
logo.className = 'nav-logo'
const logoImage = document.createElement('img')
logoImage.id = 'nav-logo-image'
logoImage.src = '../../img/landingImages/comic-book.png'
logoImage.alt = 'iComic Book Logo'
const logoTitle = document.createElement('h1')
logoTitle.id = 'nav-logo-title'
logoTitle.textContent = 'iComic'
logo.append(logoImage, logoTitle)
const navButtons = document.createElement('section')
navButtons.className = 'nav-buttons-container'
const homeButton = document.createElement('a')
homeButton.className = 'nav-buttons'
homeButton.textContent = 'Home'
homeButton.href = '../landing/landing.html'
const aboutButton = document.createElement('a')
aboutButton.className = 'nav-buttons'
aboutButton.textContent = 'About'
aboutButton.href = '../about/about.html'
const booksButon = document.createElement('a')
booksButon.className = 'nav-buttons'
    booksButon.textContent = 'Books'
    booksButon.href = '../books/book.html'
const searchbar = document.createElement('input')
searchbar.className = 'nav-searchbar'
searchbar.placeholder = 'Search....'
const loginButton = document.createElement('a')
loginButton.className = 'nav-buttons'
loginButton.id = 'login-button'
loginButton.textContent = 'Login'
loginButton.href = '../login/login.html'    
const registerButton = document.createElement('a')
registerButton.className = 'nav-buttons'
registerButton.id = 'register-button'
registerButton.textContent = 'Register'
registerButton.href = '../register/register.html'    
navButtons.append(homeButton, aboutButton, booksButon, searchbar, loginButton, registerButton)
    header.append(logo,navButtons)
}
document.addEventListener("DOMContentLoaded", () => {
    loadNav()
})


