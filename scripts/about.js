function Author(Name = String, Surename = String, Age = Number,  Profession = String) {
        this.Name = Name,
        this.Surename = Surename
        this.Age = Age
        this.Profession = Profession
}
authorList = [
    new Author(
        "Blerina",
        "Restelica",
        20,
        "Student",
   ),
    new Author(
        "Enis",
        "Halilaj",
        20,
        "Student",
     ),
    new Author(
        "Veron",
        "Ibishi",
        19,
         "Student",
      )
]
function renderAuthors() {
    for (let i = 0; i < authorList.length; i++) {
        const createElement = document.getElementById('crew')
        const imageUrl = document.createElement('img')
        imageUrl.src = 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png'
        imageUrl.className = 'userImg'
        const createCard = document.createElement('div')
        const nameSurename = document.createElement('h1')
        const position = document.createElement('h2')
        const age = document.createElement('h4')
        createCard.className = "card"
        nameSurename.className = "nameSurename"
        position.className = 'position'
        age.className = "age"
        nameSurename.textContent = authorList[i].Name + ' ' + authorList[i].Surename
        position.textContent = authorList[i].Profession
        age.textContent = authorList[i].Age + ' Years Old'
        createCard.append(imageUrl,nameSurename,position,age)
        createElement.appendChild(createCard)
    }
}
document.addEventListener("DOMContentLoaded", () => {
    renderAuthors()
})
