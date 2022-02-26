function user(name = String, username = String, password = String, age = Number, email = String, access = String) {
    this.name = name,
    this.username = username,
    this.password = password,
    this.age = age,
    this.email = email
    this.access = access
}

renderUsers = [ 
    new user(
        'admin',
        'admin',
        'admin',
        100,
        'admin@super.com',
        'admin'
    ),
    new user(
        'Veron Ibishi',
        'admin1',
        'admintest',
        19,
        'veroni@mail.com',
        'admin'
    ),
    new user(
        'Enis Halilaj',
        'admin2',
        'admintest2',
        20,
        'enis@mail.com',
        'admin'
    ),
    new user(
        'Blerina Restelica',
        'admin3',
        'admintest3',
        20,
        'blerina@mail.com',
        'admin'
    ),
    new user(
        'Rand',
        'user',
        'user',
        22,
        'user@mail.com',
        'user'
    )
]

function showPassword() {
    var pw = document.getElementById('password');
    if (pw.type === 'password') {
        pw.type = 'text';
    } else {
        pw.type = 'password';
    }
}

function validateLogin() {
    let username = document.getElementById('username').value
    let password = document.getElementById('password').value
    for (let i = 0; i < renderUsers.length; i++) {
        if (username == renderUsers[i].username && password == renderUsers[i].password) {
            window.alert('Logged')
                toDestroy(true, renderUsers[i].access)
            return
        }
    }
}

function toDestroy(toBeDestroyed = Boolean, access = String) {
    if (toBeDestroyed) {
        let destroyed = document.getElementById('removed');
        destroyed.remove();
        toCreate(access)
    }
}

const globalUsers = generateGenericUsers('generateCount');
const globalUsersInfo = generateGenericUsers('generateUsersInfo')
let globalAdminInfo = generateAdmins('generateAdminInfo');
let globalAccessEdit = false

function generateGenericUsers(param) {
    if (param == 'generateCount') {
        let count = 0;
        for (let i = 0; i < renderUsers.length; i++) {
            if (renderUsers[i].access == 'user') {
                count++;
            }
        }
        return count;
    }
    else if (param == 'generateUsersInfo') {
        const arr = []
        for (let i = 0; i < renderUsers.length; i++){
            if (renderUsers[i].access == 'user') {
             arr.push(renderUsers[i])   
            }
        }
        return arr
    }
}




function generateAdmins(param) {
    if (param == 'generateCount') {
        let count = 0;
        for (let i = 0; i < renderUsers.length; i++) {
            if (renderUsers[i].access == 'admin') {
                count++;
            }
        }
        return count;
    }
    else if (param == 'generateAdminInfo') {
        const arr = []
        for (let i = 0; i < renderUsers.length; i++){
            if (renderUsers[i].access == 'admin') {
             arr.push(renderUsers[i])   
            }
        }
        return arr
    }
}



function toCreate(accessType) {
    if (accessType == 'admin') {
        createAdminPanel();
    }
    else {
        createUserPanel();
    }
}



function createAdminPanel(){
    let createBoard = document.getElementById('toBeCreated')
    const siteInfo = document.createElement('div')
    siteInfo.append(createGeneralInfo(), createGeneralBookInfo(), createGeneralOrderList())
    siteInfo.className = 'siteInfo'
    const tableInfo = document.createElement('section')
    tableInfo.append(genericSiteGenerator())
    tableInfo.className = 'tables'
    createBoard.append(siteInfo,genericSiteGenerator())
}
////


function createGeneralInfo() {
    const generalUserInfo = document.createElement('div')
    const userTitle = document.createElement('h5')
    userTitle.textContent = 'Users'
    const userCount = document.createElement('h3')
    userCount.textContent = globalUsers
    generalUserInfo.append(userTitle, userCount)
    generalUserInfo.className = 'generalInfo'
    return generalUserInfo
}


function createGeneralBookInfo() {
    const generalBookInfo = document.createElement('div')
    const bookTitle = document.createElement('h5')
    bookTitle.textContent = 'Available Books'
    const bookCount = document.createElement('h3')
    bookCount.textContent = 355
    generalBookInfo.append(bookTitle, bookCount)
    generalBookInfo.className = 'bookInfo'
    return generalBookInfo
}


function createGeneralOrderList() {
    const generalOrderList = document.createElement('div')
    const orderTitle = document.createElement('h5')
    orderTitle.textContent = 'Orders'
    const orderAmount = document.createElement('h3')
    orderAmount.textContent = 58
    generalOrderList.append(orderTitle, orderAmount)
    generalOrderList.className = 'orderInfo'
    return generalOrderList
}


function genericSiteGenerator() {
    const table = document.createElement('table')
    table.id = 'ourTable'
    const main = document.createElement('main')
    main.append(table,generateSection())
    main.className = 'main-container'
    table.append(generateTableRows(), generateTableBody())
   return main
}
function generateSection() {
    const section = document.createElement('section')
    section.className = 'header-container'
    const headline = document.createElement('h2')
    headline.textContent = 'Manage Admins'
    const contain = document.createElement('div')
    contain.className = 'header-child'
    let editButton = document.createElement('button')
    editButton.className = 'delete-button'
    editButton.id = 'delt'
    editButton.textContent = 'Edit'
    let cc = 0;
    editButton.onclick = () => { 
        globalAccessEdit = !globalAccessEdit
        if (globalAccessEdit) {
            const elemtns = document.querySelectorAll('.edit-buttons')
            for (let i = 0; i < elemtns.length; i++){
                elemtns[i].style.display = 'initial'
            }
        }
        else {
            const elemtns = document.querySelectorAll('.edit-buttons')
            for (let i = 0; i < elemtns.length; i++){
                elemtns[i].style.display = 'none'
            }
        }
    }
        const addButton = document.createElement('button')
        addButton.className = 'add-button'
        addButton.textContent = 'Add new Admin'
        addButton.onclick = () => {
        modalOpened = !modalOpened
            createmModal()
        }
        contain.append(editButton, addButton)
        section.append(headline, contain)
        return section
}



function generateTableHead(header = section) {
    const th = document.createElement('thead')
    th.appendChild(header)
    return th
}

function generateTableRows() {
    const thead = document.createElement('thead')
    const tr = document.createElement('tr')
    tr.id = 'tableRow'
    thead.className = 'head-class'
    const thName = document.createElement('th')
    thName.textContent = 'Name'
    const thEmail = document.createElement('th')
    thEmail.textContent = 'Email'
    const thUsername = document.createElement('th')
    thUsername.textContent = 'username'
    const thAge = document.createElement('th')
    thAge.textContent = 'Age'
    tr.append(thName, thUsername, thEmail, thAge)
    return thead.appendChild(tr)
}

let removed = []
function generateTableBody() {
    const tbody = document.createElement('tbody')
    tbody.id = 'myTable'
    for (let i = 0; i < globalAdminInfo.length; i++) {
        const tr = document.createElement('tr')
        const tdName = document.createElement('td')
        tdName.textContent = globalAdminInfo[i].name
        const tdUsername = document.createElement('td')
        tdUsername.textContent = globalAdminInfo[i].username
        const tdEmail = document.createElement('td')
        tdEmail.textContent = globalAdminInfo[i].email
        const tdAge = document.createElement('td')
        tdAge.textContent = globalAdminInfo[i].age
        const tdButtons = document.createElement('td')
        const tdDelete = document.createElement('button')
        tdDelete.id = 'delete-btn'
        tdDelete.textContent = 'Delete'
        tdDelete.className = 'edit-buttons'
        tdDelete.onclick = () => {
            removed.push(globalAdminInfo[i])
            watchTableBody()
            tr.remove();
        }
        tdButtons.append(tdDelete)
        tdButtons.id = 'td-buttons'
        tr.append(tdName, tdUsername, tdEmail, tdAge, tdButtons)
        tbody.appendChild(tr)
    }
    return tbody
}




let modalOpened = false
function createmModal() {
        const modalContainer = document.createElement('div')
        modalContainer.className = 'modal-body'
        const modalBody = document.createElement('div')
        modalBody.className = 'modal-container'
        modalTitle = document.createElement('h6')
        modalTitle.textContent = 'Add a new Admin'
        const InputModal = document.createElement('div')
        InputModal.className = 'container-child2'
        const save = document.createElement('button')
        save.textContent = 'Save'
        const close = document.createElement('button')
        close.textContent = 'Close'
        save.className = 'modal-button'; close.className = 'modal-button';
        InputModal.append(modalNameInput(), modalUserNameInput(), modalPasswordInput(), modalAgeInput(), modalEmailInput(), holdButtons(close,save))
        const selectBody = document.querySelector('body')
        modalBody.append(modalTitle, InputModal)
        modalContainer.appendChild(modalBody)
        selectBody.appendChild(modalContainer)
        close.onclick = () => {
            modalContainer.id = 'close'
            document.querySelector('.panel').id = 'not'
            document.querySelector('header').id =  'not'
        }
        save.onclick = () => {
            const tr = document.createElement('tr')
            const tdName = document.createElement('td')
            tdName.textContent = document.getElementById('name').value
            const tdUsername = document.createElement('td')
            tdUsername.textContent = document.getElementById('username').value
            const tdEmail = document.createElement('td')
            tdEmail.textContent = document.getElementById('email').value
            const tdAge = document.createElement('td')
            tdAge.textContent = document.getElementById('age').value
            const tdDelete = document.createElement('button')
            tdDelete.id = 'delete-btn'
            tdDelete.textContent = 'Delete'
            tdDelete.onclick = () => {
                tr.remove()
            }
            const tdButtons = document.createElement('td')
            tdButtons.id = 'td-buttons'
            tdButtons.appendChild(tdDelete)
            tr.append(tdName, tdUsername, tdEmail, tdAge, tdButtons)
            const tbody = document.getElementById('myTable')
            addAdmin()
            modalContainer.id = 'close'
            document.querySelector('.panel').id = 'not'
            document.querySelector('header').id =  'not'
            tbody.appendChild(tr)
        }
        document.querySelector('.panel').id = 'try'
        document.querySelector('header').id = 'try'
}

function modalNameInput(){
    const modalNameInput = document.createElement('input')
    modalNameInput.type = 'text'
    modalNameInput.placeholder = 'Write the Admin Full Name'
    modalNameInput.id = 'name'
    modalNameInput.className = 'input-modal'
    return modalNameInput
}
function modalUserNameInput() {
    const modalUserNameInput = document.createElement('input')
    modalUserNameInput.type = 'text'
    modalUserNameInput.placeholder = 'Write the admin username'
    modalUserNameInput.id = 'username'
    modalUserNameInput.className = 'input-modal'
    return modalUserNameInput
}
function modalPasswordInput() {
    const modalPasswordInput = document.createElement('input')
    modalPasswordInput.type = 'password'
    modalPasswordInput.placeholder = 'Write the Admin Password...'
    modalPasswordInput.id = 'password'
    modalPasswordInput.className = 'input-modal'
    return modalPasswordInput
}
function modalAgeInput() {
    const modalAgeInput = document.createElement('input')
    modalAgeInput.type = 'number'
    modalAgeInput.placeholder = 'Write the Admin Age'
    modalAgeInput.id = 'age'
    modalAgeInput.className = 'input-modal'
    return modalAgeInput
}
function modalEmailInput() {
    const modalEmailInput = document.createElement('input')
    modalEmailInput.type = 'email'
    modalEmailInput.placeholder = `Write you're admin email`
    modalEmailInput.id = 'email'
    modalEmailInput.className = 'input-modal'
    return modalEmailInput
}
function holdButtons(close = HTMLButtonElement, save = HTMLButtonElement) {
    const holdButtons = document.createElement('div')
    holdButtons.className = 'modal-buttonContainer'
    holdButtons.append(close, save)
    return holdButtons
}
function addAdmin() {
    const fullName = document.getElementById('name').value
    const username = document.getElementById('username').value
    const password = document.getElementById('password').value
    const age = document.getElementById('age').value
    const email = document.getElementById('email').value
    renderUsers.push(new user(
        fullName,
        username,
        password,
        age,
        email,
    ))
}
function watchTableBody() {
        if (globalAdminInfo.length == removed.length) {
            document.getElementById('tableRow').remove()
        }
}
