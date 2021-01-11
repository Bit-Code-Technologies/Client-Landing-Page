const amount = document.getElementById('amount')
const range = document.getElementById('range')
const reduceAmount = document.getElementById('reduce-amount')
const monthlyAmount = document.getElementById('mon')
const duration = document.getElementById('duration')
const monthlyIcome = document.getElementById('monthly-income')
const step2 = document.getElementById('step-2')
const step3 = document.getElementById('step-3')

function calcFormSubmit(event) {
  event.preventDefault()
  const data = {}
  const formdata = new FormData(event.target)
  data.firstName = formdata.get('fname')
  data.lastName = formdata.get('lname')
  data.email = formdata.get('email')
  data.phone = formdata.get('phone')
  data.amount = amount.value
  data.reduceAmount = reduceAmount.innerHTML
  data.monthlyAmount = monthlyAmount.innerHTML
  data.duration = duration.innerHTML
  data.monthlyIncome = monthlyIcome.value
  formdata.append("reduceAmount", data.reduceAmount)
  formdata.append("monthlyAmount", data.monthlyAmount)
  formdata.append("duration", data.duration)
  formdata.append("monthlyIncome", data.monthlyIncome)

  const url = "https://debtfreelife.ccredit.ca/wp-admin/admin-ajax.php?action=bitconnectzcrm_save_data"
  const response = fetch(url, {
    method: 'POST',
    mode: 'cors',
    body: formdata
  });
  // console.log(data)
  slideChange('+1')
}

amount.addEventListener('change', ({ target: { value } }) => {
  range.value = value
})

const rangeable = new Rangeable(range, {
  type: "single",
  tooltips: "true",
  min: 5000,
  max: 100000,
  step: 1000,
  value: 24000,
  vertical: false,
  controls: undefined,
  onInit: () => {
    document.querySelector('[tabindex="1"]').setAttribute('tabindex', 0)
  },
  onChange: (val) => {
    amount.value = val
    calcSetterByLogic(val)
  },
})

function calcSetterByLogic(amount) {
  const amnt = Number(amount)
  if (amnt >= 36000) {
    reduceAmount.innerHTML = (amount / 3).toFixed(0)
    monthlyAmount.innerHTML = ((amount / 3) / 60).toFixed(0)
    duration.innerHTML = '60 Months'
  } else if (amnt >= 18000 && amnt <= 35999) {
    reduceAmount.innerHTML = (amount / 3).toFixed(0)
    monthlyAmount.innerHTML = 200
    duration.innerHTML = ((amount / 3).toFixed(0) / 200).toFixed(0) + ' Months'
  } else if (amnt >= 5000 && amnt <= 17000) {
    reduceAmount.innerHTML = 6000
    monthlyAmount.innerHTML = 200
    duration.innerHTML = '30 Months'
  }
}


new Splide('.review', {
  type: 'loop',
  perPage: 3,
  breakpoints: {
    1200: {
      perPage: 2,
    },
    950: {
      perPage: 1,
    },
  },
}).mount();

let calcSlide = new Splide('.calc-slider', {
  perPage: 1,
  start: 0,
  type: 'slide',
  drag: false,
  arrows: false,
  pagination: false,
  autoHeight: true
}).mount();

new Splide('.review-second', {
  perPage: 1,
  start: 0,
  type: 'loop',
  autoHeight: true
}).mount();

function slideChange(step) {
  calcSlide.go(step)
  calcSlide.index === 1 && step2.classList.add('active')
  calcSlide.index === 2 && step3.classList.add('active')
}