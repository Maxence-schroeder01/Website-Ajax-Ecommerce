let formInputs = [
  {
    inputObject: document.querySelector("#card_no_input"),
    targetObject: document.querySelector("#card_no"),
    regex: /^[(0-9\s{19})]+$/i
  },
  {
    inputObject: document.querySelector("#card_name_input"),
    targetObject: document.querySelector("#card_name"),
    regex: /^[A-Z\s]+$/i
  },
  {
    inputObject: document.querySelector("#card_expiry_date_input"),
    targetObject: document.querySelector("#card_expiry_date"),
    regex: /(^0[1-9]|1[0-2]+)\/([2-9]{1}[0-9]{1})/
  },
  {
    inputObject: document.querySelector("#card_cvv_input"),
    targetObject: document.querySelector("#card_cvv"),
    regex: /^[0-9]{3,4}$/
  }
];

let cardBody = document.getElementById("credit-card-body");

formInputs.forEach((obj) => {
  console.log(obj);
  obj.inputObject.addEventListener("input", (e) => {
    if (obj.regex.test(e.target.value)) {
      if (e.target.id === "card_no_input") {
        e.target.value = e.target.value
          .replace(/[^\d]/g, "")
          .replace(/(.{4})/g, "$1 ")
          .trim();
      }

      obj.targetObject.textContent = e.target.value.trim();
      e.target.classList.remove("error");
    } else {
      if (e.target.value === "") e.target.classList.remove("error");
      else e.target.classList.add("error");
    }
  });
});
formInputs[3].inputObject.addEventListener("focus", () => {
  cardBody.classList.add("flip");
});
formInputs[3].inputObject.addEventListener("blur", () => {
  cardBody.classList.remove("flip");
});