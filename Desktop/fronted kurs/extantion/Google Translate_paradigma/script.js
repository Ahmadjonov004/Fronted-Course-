const ques = document.querySelectorAll(".ques");
const input = document.querySelector("input");
const btn = document.querySelector("button");
const ans = document.querySelector("#ans");

const REGEX = /[a-zA-Z0-9]/g;
const sanitize = (str) => (str.match(REGEX) ? str.match(REGEX).join("") : "");

btn.addEventListener("click", () => {
  const inp = sanitize(input.value);
  ans.innerHTML = "";
  let count = 0;

  ques.forEach((q) => {
    const que = sanitize(q.textContent);
    if (que.includes(inp)) {
      const res = q.nextElementSibling.querySelector("span");
      ans.innerHTML += `<li>${res.innerText}</li>`;
      count++;
    }
  });

  if (count == 0) {
    ans.innerHTML += `<li>🥴!</li>`;
  }
});
