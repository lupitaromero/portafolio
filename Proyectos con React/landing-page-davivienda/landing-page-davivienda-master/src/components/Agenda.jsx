import React, { useState, useEffect } from 'react';
import { motion } from 'framer-motion';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faArrowPointer } from '@fortawesome/free-solid-svg-icons';

function Title() {
  const [currentIndex, setCurrentIndex] = useState(0);
  const images = [
    '/img/img1.png',
    '/img/img2.png',
    '/img/img3.png',
    '/img/img4.png',
  ];

  const titles = [
    'Hackathon Davivienda',
    'Para Innovar y Emprender',
    'Descubre tus habilidades en el #HackathonDavivienda',
    'Descarga la App de DaviPlata',
  ];

  const descriptions = [
    'Primer Hackathon con jóvenes universitarios en El Salvador',
    'Una iniciativa que busca promover la innovación.',
    'Fecha: 10 de marzo de 2023 | 8:00 a.m. a 5:00 p.m | Lugar: xxxxxxxxxx',
    'Ya no tienes que buscarla con DaviPlata, puedes pagarlo todo',
  ];

  const nextSlide = () => {
    setCurrentIndex((prevIndex) => (prevIndex === images.length - 1 ? 0 : prevIndex + 1));
  };

  const prevSlide = () => {
    setCurrentIndex((prevIndex) => (prevIndex === 0 ? images.length - 1 : prevIndex - 1));
  };

  useEffect(() => {
    const interval = setInterval(() => {
      nextSlide();
    }, 4000);

    return () => clearInterval(interval);
  }, [currentIndex]);

  const redirectToGoogleForm = () => {
    window.location.href = 'https://docs.google.com/forms/d/e/1FAIpQLS';
  };

  const redirectToDaviPlata = () => {
    window.location.href = 'https://www.daviplata.com/wps/portal/daviplata/Home/QueEsDaviPlata/!ut/p/z1/04_Sj9CPykssy0xPLMnMz0vMAfIjo8zizQNNDDycTQz93B2dXQ0CDYzMPV3CjA0M3E30wwkpiAJKG-AAjgZA_VFYlDgaOAUZOYEM8DfCqgDFjILcCINMR0VFAIXsUVc!/dz/d5/L2dBISEvZ0FBIS9nQSEh/';
  };

  return (
    <div className="relative w-full">
      <div className="bg-gradient-to-r from-davi-Red to-davi-Yellow flex flex-col md:flex-row">
        <div className="w-full md:w-1/2 flex flex-col items-center justify-center text-center p-4 md:p-8">
          <motion.h1
            className="text-lg md:text-2xl lg:text-3xl font-bold text-white"
            initial={{ opacity: 0, y: -20 }}
            animate={{
              opacity: 1,
              y: [0, -10, 0],
              transition: { duration: 1.5, repeat: Infinity },
            }}
          >
            {titles[currentIndex]}
          </motion.h1>
          <motion.p
            className="text-xs md:text-sm lg:text-base text-white my-2"
            initial={{ opacity: 0, y: -20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.5 }}
          >
            {descriptions[currentIndex]}
          </motion.p>
          <motion.button
            className="bg-[#048ABF] text-white px-4 py-2 mt-4 rounded hover:bg-gray-200 hover:text-black transition-colors text-xs md:text-sm lg:text-base"
            onClick={currentIndex === 4 ? redirectToDaviPlata : redirectToGoogleForm}
            style={{ boxShadow: '0px 2px 4px rgba(0, 0, 0, 0.1)' }}
            whileTap={{ scale: 0.95 }} // Efecto de escala al hacer clic
          >
            <strong>
              {titles[currentIndex] === 'Descarga la App de DaviPlata' ? 'Descarga la App ' : 'Inscribete aquí '}
            </strong>
            <FontAwesomeIcon icon={faArrowPointer} />
          </motion.button>
        </div>
        <div className="w-full md:w-1/2 flex items-center justify-center my-4">
          <motion.img
            src={images[currentIndex]}
            alt="Carousel Image"
            className="h-96 object-cover"
            initial={{ opacity: 0 }}
            animate={{ opacity: 1 }}
            transition={{ duration: 1.5 }}
          />
        </div>
      </div>
      <button
        className="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 p-2 rounded-full mx-3 font-bold"
        onClick={prevSlide}
      >
        {"<"}
      </button>
      <button
        className="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 p-2 rounded-full mx-3 font-bold"
        onClick={nextSlide}
      >
         {">"}
      </button>
    </div>
  );
};

export default Title;
