import React from 'react'

export default function Descripcion() {
  return (
    <section id='descripcion' className='h-auto flex flex-col justify-center'>
      <h1 className='text-5xl font-bold text-center text-red-700 pb-3'>¡Prepárate para ser un ganador!</h1>
      <h2 className='text-2xl text-center '>Llegó la Hackathon con la que ganarás hasta $3.000</h2>
      <br />
      <h4 className='text-5xl font-bold text-center text-[#048ABF] p-3'>Premios:</h4>
      <div className='container max-w-full mx-auto'>
        <div className='max-w-full md:max-w-6xl mx-auto my-3 md:px-8'>
            <div className='grid grid-cols-1 md:grid-cols-3 items-center'>
              {/**premio 1*/}
              <div className='p-4'>
                <div className='flex items-center justify-center leading-none rounded-t-lg bg-red-600 py-3 tracking-wide'>
                  <svg width='64px' height='64px' viewBox='0 0 64 64' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--emojione-monotone' preserveAspectRatio='xMidYMid meet' fill='#000000'>
                    <g id='SVGRepo_bgCarrier' stroke-width='0'></g>
                    <g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g>
                    <g id='SVGRepo_iconCarrier'>
                      <path d='M33.545 26.613a15.755 15.755 0 0 0-1.309-.067c-8.668 0-15.691 7.036-15.691 15.718c0 2.59.637 5.025 1.744 7.178a17.388 17.388 0 0 1-.873-5.43c0-9.205 7.111-16.729 16.129-17.399' fill='#ffffff'></path>
                      <path d='M38.533 55.139a17.759 17.759 0 0 1-4.988 2.316a15.905 15.905 0 0 0 6.918-2.578c7.203-4.842 9.158-14.5 4.367-21.578a15.286 15.286 0 0 0-.777-1.028c4.427 7.733 2.115 17.735-5.52 22.868' fill='#ffffff'></path>
                      <path d='M44.656 26.519v-8.698c0-.364-.199-.67-.48-.86L54 2H35.164L32 6.746L28.836 2H10l9.822 14.96c-.281.19-.48.497-.48.861v8.698C14.861 30.187 12 35.758 12 42c0 11.045 8.955 20 20 20c.682 0 1.354-.035 2.018-.102C44.115 60.887 52 52.365 52 42c0-6.242-2.863-11.813-7.344-15.481M40.826 3h6.328l-8.826 13.239l-3.164-4.746L40.826 3m.666 17.985l.973-1.458c.053.125.082.261.082.404v4.219a.99.99 0 0 1-.297.7C39.25 23.052 35.752 22 32 22a19.87 19.87 0 0 0-10.252 2.851a1 1 0 0 1-.297-.701v-4.219c0-.143.031-.28.082-.404l.973 1.459h18.986zM16.846 3h6.328l11.324 16.985H28.17L16.846 3M32 59c-9.389 0-17-7.611-17-17c0-9.388 7.611-17 17-17c9.387 0 17 7.612 17 17c0 9.389-7.613 17-17 17' fill='#ffffff'></path>
                      <path d='M34.234 49.207V31H30.39a3.034 3.034 0 0 1-3.034 3.035v3.793c.274 0 2.345-.156 3.034-.432v11.811h-3.034V53h9.912v-3.793h-3.034z' fill='#ffffff'></path>
                    </g>
                  </svg>
                  <span className='text-center text-white font-bold uppercase text-2xl'>PRIMER LUGAR</span>
                </div>
                <div className='rounded-b-lg shadow-lg overflow-hidden p-9'>
                  <div className='text-left flex items-center justify-center text-sm sm:text-md max-w-sm mx-auto mt-2 px-8 lg:px-6'>
                    <img className='w-1/4' src='/img/billete.png' alt='' />
                    <h2 className='ml-3 text-5xl text-center font-bold text-black'>$3,000</h2>
                  </div>
                </div>
              </div>
              {/**premio 2*/}
              <div className='p-4'>
                <div className='flex items-center justify-center leading-none rounded-t-lg bg-red-600 py-2 tracking-wide'>
                  <svg width='50px' height='50px' viewBox='0 0 64 64' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--emojione-monotone' preserveAspectRatio='xMidYMid meet' fill='#000000'>
                    <g id='SVGRepo_bgCarrier' stroke-width='0'></g>
                    <g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g>
                    <g id='SVGRepo_iconCarrier'>
                      <path d='M44.656 26.519v-8.698c0-.364-.199-.67-.48-.86L54 2H35.164L32 6.746L28.836 2H10l9.822 14.96c-.281.19-.48.497-.48.861v8.698C14.861 30.187 12 35.758 12 42c0 11.045 8.955 20 20 20c.682 0 1.354-.035 2.018-.102C44.115 60.887 52 52.365 52 42c0-6.242-2.863-11.813-7.344-15.481M40.826 3h6.328l-8.826 13.239l-3.164-4.746L40.826 3m.666 17.985l.973-1.458c.053.125.082.261.082.404v4.219a.99.99 0 0 1-.297.7C39.25 23.052 35.752 22 32 22a19.87 19.87 0 0 0-10.252 2.851a1 1 0 0 1-.297-.701v-4.219c0-.143.031-.28.082-.404l.973 1.459h18.986zM16.846 3h6.328l11.324 16.985H28.17L16.846 3M32 59c-9.389 0-17-7.611-17-17c0-9.388 7.611-17 17-17c9.387 0 17 7.612 17 17c0 9.389-7.613 17-17 17' fill='#ffffff'></path>
                      <path d='M32.236 26.546c-8.666 0-15.691 7.036-15.691 15.718c0 2.59.637 5.025 1.744 7.178a17.44 17.44 0 0 1-.871-5.432c0-9.203 7.109-16.725 16.127-17.397a15.711 15.711 0 0 0-1.309-.067' fill='#ffffff'></path>
                      <path d='M38.533 55.139a17.733 17.733 0 0 1-4.988 2.316a15.905 15.905 0 0 0 6.918-2.578c7.203-4.842 9.158-14.5 4.367-21.576c-.244-.36-.508-.698-.777-1.031c4.427 7.736 2.117 17.736-5.52 22.869' fill='#ffffff'></path>
                      <path d='M38.448 49.207h-9.104v-2.275a3.036 3.036 0 0 1 3.034-3.035a6.067 6.067 0 0 0 6.069-6.068c0-2.957-1.5-6.828-6.827-6.828c-3.549 0-6.069 2.695-6.069 6.828h3.793c0-1.561 1.177-3.002 2.702-3.002c1.816 0 2.608 1.195 2.608 2.244a3.034 3.034 0 0 1-3.034 3.033a6.069 6.069 0 0 0-6.069 6.07V53h12.896v-3.793z' fill='#ffffff'></path>
                    </g>
                  </svg>
                  <span className='text-center text-white font-bold uppercase text-xl'>SEGUNDO LUGAR</span>
                </div>
                <div className='rounded-b-lg shadow-lg overflow-hidden p-6'>
                  <div className='text-left flex items-center justify-center text-sm sm:text-md max-w-sm mx-auto mt-3 px-8 lg:px-6'>
                    <img className='w-1/4' src='/img/billete.png' alt='' />
                    <h2 className='ml-3 text-4xl text-center font-bold text-black'>$2,000</h2>
                  </div>
                </div>
              </div>
              {/**premio 3*/}
              <div className='p-4'>
                <div className='flex items-center justify-center leading-none rounded-t-lg bg-red-600 py-1 tracking-wide'>
                <svg width='50px' height='50px' viewBox='0 0 64 64' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' class='iconify iconify--emojione-monotone' preserveAspectRatio='xMidYMid meet' fill='#000000'>
                  <g id='SVGRepo_bgCarrier' stroke-width='0'></g>
                  <g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g>
                  <g id='SVGRepo_iconCarrier'>
                    <path d='M44.656 26.521v-8.697a1.04 1.04 0 0 0-.48-.861L54 2H35.164L32 6.747L28.836 2H10l9.822 14.961a1.04 1.04 0 0 0-.48.861v8.697C14.861 30.188 12 35.759 12 42.001C12 53.046 20.955 62 32 62c.682 0 1.354-.035 2.018-.102C44.115 60.888 52 52.366 52 42.001c0-6.242-2.863-11.813-7.344-15.48M40.826 3h6.328l-8.826 13.24l-3.164-4.746L40.826 3m.666 17.987l.973-1.459c.053.125.082.26.082.404v4.219a.984.984 0 0 1-.297.699C39.25 23.053 35.752 22 32 22a19.861 19.861 0 0 0-10.252 2.852a1.002 1.002 0 0 1-.297-.701v-4.219c0-.145.031-.281.082-.404l.973 1.459h18.986M16.846 3h6.328l11.324 16.987H28.17L16.846 3M32 59.001c-9.389 0-17-7.611-17-17s7.611-17 17-17c9.387 0 17 7.611 17 17s-7.613 17-17 17' fill='#ffffff'></path>
                    <path d='M32.236 26.548c-8.666 0-15.691 7.037-15.691 15.717c0 2.59.637 5.025 1.744 7.18a17.461 17.461 0 0 1-.871-5.434c0-9.203 7.109-16.725 16.127-17.396a15.667 15.667 0 0 0-1.309-.067' fill='#ffffff'></path>
                    <path d='M38.533 55.14a17.623 17.623 0 0 1-4.988 2.316a15.855 15.855 0 0 0 6.918-2.578c7.203-4.842 9.158-14.5 4.369-21.576a16.633 16.633 0 0 0-.777-1.031c4.425 7.736 2.113 17.736-5.522 22.869' fill='#ffffff'></path>
                    <path d='M38.875 46.169c0-1.305-.355-2.416-1.065-3.337c-.711-.921-1.659-1.514-2.845-1.778c1.985-1.127 2.979-2.636 2.979-4.526c0-1.333-.485-2.526-1.454-3.585c-1.176-1.295-2.739-1.94-4.687-1.94c-1.139 0-2.167.223-3.084.669c-.919.445-1.634 1.058-2.146 1.837c-.513.778-.896 1.819-1.15 3.123l3.655.646c.104-.941.396-1.655.876-2.146a2.34 2.34 0 0 1 1.736-.734c.687 0 1.238.216 1.652.647c.414.43.621 1.008.621 1.733c0 .853-.283 1.536-.848 2.05c-.564.515-1.384.758-2.457.729l-.438 3.365c.706-.206 1.313-.309 1.822-.309c.771 0 1.425.303 1.962.911c.537.606.806 1.43.806 2.468c0 1.099-.28 1.97-.841 2.617c-.561.646-1.25.97-2.068.97c-.763 0-1.412-.271-1.948-.809s-.865-1.318-.988-2.338l-3.84.486c.198 1.812.913 3.278 2.146 4.401c1.233 1.121 2.786 1.683 4.659 1.683c1.976 0 3.627-.667 4.955-1.999c1.327-1.332 1.99-2.943 1.99-4.834' fill='#ffffff'></path>
                  </g>
                </svg>
                  <span className='text-center text-white font-bold uppercase text-lg'>TERCER LUGAR</span>
                </div>
                <div className='rounded-b-lg shadow-lg overflow-hidden p-3'>
                  <div className='text-left flex items-center justify-center text-sm sm:text-md max-w-sm mx-auto mt-2 px-8 lg:px-6'>
                    <img className='w-1/4' src='/img/billete.png' alt='' />
                    <h2 class='ml-3 text-3xl text-center font-bold text-black'>$1,000</h2>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      </section>
  );
}

