const registerModal = document.getElementById("registerModal");
const successModal = document.getElementById("successModal");
const openRegister = document.getElementById("openRegister");
const closeRegister = document.getElementById("closeRegister");
const form = document.getElementById("registerForm");
const backHome = document.getElementById("backHome");

function show(modal){ modal.classList.add("show"); modal.setAttribute("aria-hidden","false"); }
function hide(modal){ modal.classList.remove("show"); modal.setAttribute("aria-hidden","true"); }

openRegister?.addEventListener("click", () => show(registerModal));
closeRegister?.addEventListener("click", () => hide(registerModal));

registerModal?.addEventListener("click", e => {
  if(e.target === registerModal) hide(registerModal);
});

form?.addEventListener("submit", e => {
  e.preventDefault();
  const dados = Object.fromEntries(new FormData(form).entries());
  localStorage.setItem("petLoveCadastro", JSON.stringify(dados));
  hide(registerModal);
  form.reset();
  show(successModal);
});

backHome?.addEventListener("click", () => {
  hide(successModal);
  window.scrollTo({top:0,behavior:"smooth"});
});

successModal?.addEventListener("click", e => {
  if(e.target === successModal) hide(successModal);
});
