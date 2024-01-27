
const refreshCaptcha = (target) => {
    const captchaImage = target.closest('.captcha__image-reload').querySelector('.captcha__image');
    captchaImage.src = '/www/bez/captcha-main/assets/php/captcha.php?r=' + new Date().getUTCMilliseconds();
  }

  const captchaBtn = document.querySelector('.captcha__refresh');
  captchaBtn.addEventListener('click', (e) => refreshCaptcha(e.target));

  const form = document.querySelector('#form');
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    try {
      fetch(form.action, {
        method: form.method,
        credentials: 'same-origin',
        body: new FormData(form)
      })
        .then((response) => {
          return response.json();
        })
        .then((data) => {
          document.querySelectorAll('input.is-invalid').forEach((input) => {
            input.classList.remove('is-invalid');
            input.nextElementSibling.textContent = '';
          });
          if (!data.success) {
            refreshCaptcha(form.querySelector('.captcha__refresh'));
            data.errors.forEach(error => {
              const input = form.querySelector(`[name="${error[0]}"]`);
              if (input) {
                input.classList.add('is-invalid');
                input.nextElementSibling.textContent = error[1];
              }
            })
          } else {
            form.reset();
            form.querySelector('.captcha__refresh').disabled = true;
            form.querySelector('[type=submit]').disabled = true;
            document.querySelector('.form-result').classList.remove('d-none');
          }
        });
    } catch (error) {
      console.error('Ошибка:', error);
    }
  });