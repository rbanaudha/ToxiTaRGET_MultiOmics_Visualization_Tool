<header class="py-3 mb-2 border-bottom">
        <div
          class="container d-flex flex-wrap justify-content-center align-items-center"
        >
          <div class="mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
            <a
              href="/ToxiTaRGET/index.php"
              class="d-flex align-items-center text-dark text-decoration-none"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
                class="bi"
                height="50"
                width="50"
              >
                <g
                  transform="translate(0.000000,782.000000) scale(0.100000,-0.100000)"
                  fill="#000000"
                  stroke="none"
                >
                  <path
                    d="M2475 7499 c-304 -47 -541 -257 -625 -554 -67 -236 -8 -507 152 -698
          26 -32 35 -48 26 -51 -7 -3 -60 -19 -118 -36 -177 -54 -351 -149 -495 -271
          -235 -198 -395 -471 -461 -784 -23 -111 -27 -396 -6 -460 21 -64 45 -117 69
          -157 13 -21 23 -40 23 -43 0 -3 -92 -5 -204 -5 -239 0 -284 -7 -391 -59 -104
          -51 -181 -130 -231 -235 -71 -150 -70 -291 5 -442 70 -141 214 -248 368 -273
          49 -8 520 -11 1695 -9 l1627 3 28 21 c60 45 64 141 7 195 l-26 24 -1656 5
          c-1655 5 -1657 5 -1702 26 -55 25 -113 88 -131 140 -7 22 -13 66 -13 99 1 104
          52 186 144 229 45 21 51 21 1290 26 l1245 5 47 22 c146 67 226 220 198 381
          -21 124 -99 211 -239 266 -36 14 -72 30 -80 35 -12 8 2 49 74 225 l88 216 361
          0 c390 0 425 4 511 55 67 39 109 85 146 161 30 61 34 78 38 173 6 182 -28 339
          -108 500 -44 87 -142 215 -202 263 l-38 31 29 57 c58 114 78 249 57 385 -25
          158 -89 279 -200 381 -115 104 -262 157 -432 157 -118 1 -200 -19 -296 -70
          l-67 -34 -60 30 c-125 63 -309 92 -447 70z m277 -275 c59 -19 152 -80 200
          -130 97 -104 136 -210 145 -394 3 -72 11 -136 19 -151 20 -39 68 -56 179 -63
          126 -7 199 -26 300 -76 244 -120 395 -367 395 -648 0 -75 -18 -124 -56 -149
          -26 -17 -64 -18 -462 -23 l-434 -5 -32 -37 c-21 -25 -62 -116 -131 -293 -55
          -142 -105 -260 -112 -262 -7 -3 -69 14 -139 37 -137 46 -189 52 -229 26 -56
          -37 -76 -118 -41 -171 24 -37 62 -53 397 -164 189 -63 313 -109 324 -121 28
          -31 23 -96 -9 -128 l-26 -27 -747 -3 c-459 -1 -767 1 -800 7 -202 38 -338 226
          -318 439 34 357 175 626 437 836 197 158 436 239 743 253 88 3 150 11 167 20
          35 17 58 61 58 108 0 66 -33 104 -115 131 -91 30 -183 85 -245 146 -226 224
          -180 612 93 789 129 84 288 103 439 53z m748 -2 c67 -30 124 -75 161 -128 81
          -119 92 -303 24 -408 l-16 -25 -65 25 c-36 13 -107 32 -159 41 l-94 16 -6 56
          c-16 139 -63 272 -136 377 l-28 41 47 17 c65 22 210 16 272 -12z"
                  />
                  <path
                    d="M2674 6989 c-16 -5 -41 -20 -55 -35 -21 -22 -25 -38 -29 -117 l-5
          -92 -92 -5 c-79 -5 -95 -8 -117 -30 -56 -52 -56 -139 0 -191 25 -24 29 -24
          209 -24 181 0 184 0 209 24 40 38 48 82 44 246 -2 124 -6 155 -21 176 -27 41
          -93 63 -143 48z"
                  />
                  <path
                    d="M3405 6158 c-97 -21 -144 -132 -96 -226 26 -49 73 -76 136 -76 91 0
          155 63 155 154 0 103 -89 170 -195 148z"
                  />
                </g>
              </svg>

              <span class="fs-4">ToxiTaRGET</span>
            </a>
            <small class="text-dark"
              >Database of Toxicant Exposures and Responses
            </small>
          </div>

<!-- Loading template HTML -->
<div id="loading-template" style="display:none;">
    <!--p>Wait...</p-->
    <img src="/ToxiTaRGET/modules/load.gif" alt="Animated GIF" autoplay>
    <!--/body-->
    </div>


          <form
            class="col-12 col-lg-auto mb-3 mb-lg-0 d-flex justify-content-center align-items-center"
	    id="my-form"
            role="search"
            action="/ToxiTaRGET/sections/geneExpression.php"
            method="post"
          >
            <input
              type="text"
              name="search"
              placeholder="Enter a gene name"
              class="m-2"
            />
            <input type="submit" onClick="submitForm()" />
          </form>


<!-- JavaScript to handle form submission and loading template -->
<script>
function submitForm() {
// show loading template
document.getElementById("loading-template").style.display = "block";
document.getElementById("my-form").style.display = "none";
// submit form using AJAX
$.ajax({
url: "submit-form.php",
type: "POST",
data: $("#my-form").serialize(),
success: function(response) {
// hide loading template and display result
document.getElementById("loading-template").style.display = "none";
document.getElementById("form-result").innerHTML = response;
document.getElementById("form-result").style.display = "block";
}
});
}
</script>


        </div>
      </header>
