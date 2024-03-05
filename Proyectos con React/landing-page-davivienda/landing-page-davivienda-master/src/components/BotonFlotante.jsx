import React from 'react';
import { motion } from 'framer-motion';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faArrowPointer } from '@fortawesome/free-solid-svg-icons';

const BotonFlotante = () => {
  return (
    <motion.button
      className="fixed bottom-10 right-10 bg-davi-Blue hover:bg-davi-Yellow text-white font-bold py-4 px-4 rounded-full"
      whileHover={{ scale: 1.1 }}
      transition={{ duration: 0.3 }}
    >
      <motion.span 
        whileHover={{ y: -5 }}
        transition={{ duration: 0.3 }}
        initial={{ opacity: 0, y: -20 }}
            animate={{
              opacity: 1,
              y: [0, -10, 0],
              transition: { duration: 1.5, repeat: Infinity },
            }}
      >
        <strong>Inscríbete Aquí!  </strong>
      </motion.span>
      <FontAwesomeIcon icon={faArrowPointer} />
    </motion.button>
  );
};

export default BotonFlotante;

