const burger = document.querySelector(".burger")
const nav = document.querySelector(".menu ul")

const input1 = document.querySelector(".form .input1")
const input2 = document.querySelector(".form .input2")

burger.addEventListener('click', () => {
    burger.classList.toggle('active')
    nav.classList.toggle('active')
})

input1.addEventListener('focus', () => {
    input1.classList.add('active')
    input2.classList.remove('active')
})

input2.addEventListener('focus', () => {
    input2.classList.add('active')
    input1.classList.remove('active')
})



