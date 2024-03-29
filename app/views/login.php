
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <script src="https://cdn.tailwindcss.com"></script>
 </head>

    <body class="bg-gray-200">
    <div class=" min-h-screen w-2/3 mx-auto flex items-center justify-center">
      <div class="bg-red-50 p-8 rounded-[20px] shadow-md flex items-center ">
        <img
          class="w-2/3 "
          src="./assets/images/laptop.jpg"
          alt="hoangpham"
        />
        <div class="w-1/3 ml-8">
          <h2 class="text-3xl font-semibold mb-4">Đăng nhập </h2>
          <form >
          
            <div class="mb-4">
              <label
                htmlFor="username"
                class="block text-sm font-medium text-gray-700"
              >
                Số điện thoại
                
              </label>
              <input
                type="text"
                id="username"
                name="username"
            
             
                placeholder="Số điện thoại"
                class="mt-1 p-2 w-full border rounded-md"
              />
            </div>
            <div class="mb-4">
              <label
                htmlFor="password"
                class="block text-sm font-medium text-gray-700"
              >
                Mật khẩu:
              
              </label>
              <input
                type="password"
                id="password"
                name="password"
                placeholder="Mật khẩu"
                
                class="mt-1 p-2 w-full border rounded-md"
              />
            </div>
            <input type="checkbox" id="rememberMe" name="rememberMe" />
            <label htmlFor="rememberMe">Nhớ mật khẩu</label>
            <br />
            <button
              type="submit"
              class="flex flex-row bg-red-300 text-white py-2 px-4 rounded-md justify-center mx-auto hover:bg-red-500"
            >
              Đăng nhập ngay
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                strokeWidth={1.5}
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                />
              </svg>
            </button>
            <p>
              Chưa có tài khoản <a href="./signup">Đăng ký</a>
            </p>
            
             
            </div>
          </form>
        
        
       
           
        </div>
      </div>
    </div>
   
    </body>
    </html>