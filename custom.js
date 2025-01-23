var buttons = document.querySelectorAll(".tiktok-l4v9n8-ButtonContainer");
var totalMount = document.getElementById("totalMount");
var buy = document.getElementById("buynow");
var input = document.getElementById("input");
var txtInput = document.getElementById("txtInput");
var spanTxt = document.getElementById("spanTxt");
var spanTxtDiv = document.getElementById("spanTxtDiv");
var hiddenInput = document.querySelector("#hiddenInput");
var coinsValue = document.querySelector("#coinsValue");
var inputUsername = document.querySelector("#inputUsername");

function changeinput() {
  txtInput.style.display = "none";
  input.style.display = "block";
  spanTxt.innerHTML = "30-2,500,000";
}

function reset() {
  console.log("oui");
  inputUsername.value = "";
}

function resetInput() {
  txtInput.style.display = "block";
  input.style.display = "none";
  spanTxt.innerHTML = "Large amount supported";
}

var inputField = document.querySelector("#input");

inputField.oninput = function () {
  var removeChar = this.value.replace(/[^0-9\.]/g, "");

  var removeDot = removeChar.replace(/\./g, "");
  this.value = removeDot;

  var formatedNumber = this.value.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

  this.value = formatedNumber;

  var cleanedValue = this.value.replace(/,/g, "");
  var result = parseFloat(cleanedValue);

  var calcul = ((result * 1.2) / 100).toFixed(2);

  switch (true) {
    case result < 30 && isNaN(result):
      changeinput();
      break;
    case result < 30:
      spanTxtDiv.innerHTML =
        "<p data-e2e='wallet-package-custom-error-30coins' id='custom-tip' class='tiktok-whmjqp-PErrorTip e4yj8b68'><svg class='tiktok-umik9j-StyledErrorIcon e4yj8b610' width='1em' data-e2e='' height='1em' viewBox='0 0 48 48' fill='currentColor' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' clip-rule='evenodd' d='M24 46C36.1503 46 46 36.1503 46 24C46 11.8497 36.1503 2 24 2C11.8497 2 2 11.8497 2 24C2 36.1503 11.8497 46 24 46ZM15.1466 30.7323L21.8788 24.0001L15.1466 17.2679C14.756 16.8774 14.756 16.2442 15.1466 15.8537L15.8537 15.1466C16.2442 14.756 16.8774 14.756 17.2679 15.1466L24.0001 21.8788L30.7323 15.1466C31.1229 14.756 31.756 14.756 32.1466 15.1466L32.8537 15.8537C33.2442 16.2442 33.2442 16.8774 32.8537 17.2679L26.1214 24.0001L32.8537 30.7323C33.2442 31.1229 33.2442 31.756 32.8537 32.1466L32.1466 32.8537C31.756 33.2442 31.1229 33.2442 30.7323 32.8537L24.0001 26.1214L17.2679 32.8537C16.8774 33.2442 16.2442 33.2442 15.8537 32.8537L15.1466 32.1466C14.756 31.756 14.756 31.1229 15.1466 30.7323Z'></path></svg> Minimum&nbsp;: 30</p>";
      totalMount.innerHTML = 0;

      break;
    case result > 2500000:
      spanTxtDiv.innerHTML =
        "<p data-e2e='wallet-package-custom-error-2500000coins' id='custom-tip' class='tiktok-whmjqp-PErrorTip e4yj8b68'><svg class='tiktok-umik9j-StyledErrorIcon e4yj8b610' width='1em' data-e2e='' height='1em' viewBox='0 0 48 48' fill='currentColor' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' clip-rule='evenodd' d='M24 46C36.1503 46 46 36.1503 46 24C46 11.8497 36.1503 2 24 2C11.8497 2 2 11.8497 2 24C2 36.1503 11.8497 46 24 46ZM15.1466 30.7323L21.8788 24.0001L15.1466 17.2679C14.756 16.8774 14.756 16.2442 15.1466 15.8537L15.8537 15.1466C16.2442 14.756 16.8774 14.756 17.2679 15.1466L24.0001 21.8788L30.7323 15.1466C31.1229 14.756 31.756 14.756 32.1466 15.1466L32.8537 15.8537C33.2442 16.2442 33.2442 16.8774 32.8537 17.2679L26.1214 24.0001L32.8537 30.7323C33.2442 31.1229 33.2442 31.756 32.8537 32.1466L32.1466 32.8537C31.756 33.2442 31.1229 33.2442 30.7323 32.8537L24.0001 26.1214L17.2679 32.8537C16.8774 33.2442 16.2442 33.2442 15.8537 32.8537L15.1466 32.1466C14.756 31.756 14.756 31.1229 15.1466 30.7323Z'></path></svg> Maximum&nbsp;: 2,500,000</p>";
      break;

    default:
      totalMount.innerHTML = calcul;
      spanTxtDiv.innerHTML =
        "<span data-e2e='wallet-package-text-custom' class='tiktok-hpayk8-SpanTextNow e4yj8b66'>€ " +
        calcul +
        "</span>";
  }

  if (totalMount.innerHTML > 0) {
    buy.removeAttribute("disabled", "");
  } else {
    buy.setAttribute("disabled", "");
  }

  hiddenInput.value = calcul;
  coinsValue.value = result;

  console.log(result);
  console.log(calcul);
};

buttons.forEach(function (button) {
  button.addEventListener("click", function () {
    buttons.forEach(function (btn) {
      btn.classList.remove("tiktok-1xsxoj2-ButtonContainer");
    });

    this.classList.add("tiktok-1xsxoj2-ButtonContainer");

    var attribut = this.getAttribute("data-button-id");

    if (attribut === "custom") {
      changeinput();
    } else {
      resetInput();
    }

    var specificSpan = button.querySelector('span[data-span-id="price"]');
    var coin = button.querySelector('span[data-span-id="coins"]');

    var spanValue = specificSpan.innerHTML;

    var coinValue = coin.innerHTML;

    totalMount.innerHTML = spanValue;
    hiddenInput.value = spanValue;
    coinsValue.value = coinValue;

    if (totalMount.innerHTML > 0) {
      buy.removeAttribute("disabled", "");
    } else {
      buy.setAttribute("disabled", "");
    }
  });
});

const radioInputs = document.querySelectorAll('input[type="radio"]');
const myDiv = document.getElementById("myDiv");
radioInputs.forEach((radioInput) => {
  radioInput.addEventListener("change", () => {
    const label = radioInput.parentElement;
    const labels = document.querySelectorAll("label");

    console.log(radioInput.value);

    labels.forEach((lbl) => {
      lbl.classList.remove("arco-radio-checked");
    });

    if (radioInput.checked) {
      label.classList.add("arco-radio-checked");
      if (radioInput.value === "Visa") {
        console.log("oui");
        myDiv.classList.add("show");
      } else {
        myDiv.classList.remove("show");
      }
    }
  });
});
