import React from 'react'


export default function BotonInscripcion() {
  return (
    <section className='flex-3 w-1/8 p-9 items-center grid grid-cols-1'>
        <div className='text-center text-black'>
            <p className='text-4xl font-bold'>¡No te pierdas esta gran oportunidad de innovar para tu ciudad!</p>
        </div><br/><br/>
        <div className='text-center'>
          <button className='
            rounded-full 
            bg-gradient-to-r 
            from-red-500 
            to-red-800 
            text-white 
            font-extrabold 
            text-2xl 
            p-4 
            transition 
            duration-300 
            ease-in-out 
            transform 
            hover:-translate-y-1 
            hover:shadow-2xl'
            >
              ¡Inscríbete y participa!
          </button>
        </div>
    </section>
  )
}
