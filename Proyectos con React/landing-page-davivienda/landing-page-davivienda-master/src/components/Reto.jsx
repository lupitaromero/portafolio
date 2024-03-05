import React, { useState } from 'react';
import { motion } from 'framer-motion';

function Reto() {
  const [retoVisible, setRetoVisible] = useState(false);
  const [entregableVisible, setEntregableVisible] = useState(false);

  const toggleReto = () => {
    setRetoVisible(!retoVisible);
  };

  const toggleEntregable = () => {
    setEntregableVisible(!entregableVisible);
  };

  return (
    <section id='reto'>
      <div className='flex items-center justify-center p-4'>
        <div className='grid grid-cols-1 md:grid-cols-2 w-3/4'>
          <div>
            <div className='border rounded-xl bg-gradient-to-r from-red-800 to-red-500 p-4 m-2' onMouseEnter={toggleReto} onMouseLeave={toggleReto}>
              <h2 className="text-2xl font-bold text-white">El Reto</h2>
              <div className="relative w-full h-48 overflow-hidden">
                <img className="object-cover w-80% h-full" src="/img/reto_img1.png" alt="Reto Afines" />
              </div>
              {retoVisible && (
                <motion.ul 
                  initial={{ opacity: 0 }}
                  animate={{ opacity: 1 }}
                  exit={{ opacity: 0 }}
                  transition={{ duration: 0.5 }}
                  className='text-gray-200 p-4 list-disc break-all'
                >
                  <p>Implementar una funcionalidad en el  App DaviPlata  que contribuya a al fortalecimiento de un ecosistema de pagos en el entorno universitario que reduzca el uso del efectivo. 
</p>
                </motion.ul>
              )}
            </div>
          </div>
          <div>
            <div className='border rounded-xl bg-gradient-to-r from-red-800 to-red-500 p-4 m-2' onMouseEnter={toggleEntregable} onMouseLeave={toggleEntregable}>
              <h2 className="text-2xl font-bold text-white">Entregable Requerido</h2>
              <div className="relative w-full h-48 overflow-hidden">
                <img className="object-cover w-80% h-full" src="/img/reto_img2.png" alt="Entregable de Estudiantes" />
              </div>
              {entregableVisible && (
                <motion.ul 
                  initial={{ opacity: 0 }}
                  animate={{ opacity: 1 }}
                  exit={{ opacity: 0 }}
                  transition={{ duration: 0.5 }}
                  className='text-gray-200 p-4 list-disc break-all'
                >
                  <li>Implementación de Plan Piloto con la solución creada</li>
                  <li>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</li>
                  <li>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</li>
                </motion.ul>
              )}
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}

export default Reto;
