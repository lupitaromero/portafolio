import { FaFacebook } from "react-icons/fa";
import { FaLinkedin } from "react-icons/fa";
import { FaInstagram } from "react-icons/fa";
import { FaYoutube } from "react-icons/fa";
import { FaAppStoreIos } from "react-icons/fa";
import { IoLogoGooglePlaystore } from "react-icons/io5";
import { TbBrandAppgallery } from "react-icons/tb";
import BotonFlotante from "./BotonFlotante";

function Footer() {
  return (
    <>
      <footer className='bg-black h-auto'>
        <div className='grid grid-cols-1 md:grid-cols-3'>
          <div className='p-4 flex items-center justify-center md:justify-start'>
              <img className='w-2/3' src="/img/logos/logo-davivienda.png" alt="" />
          </div>
          <div className='p-4'>
            <div className='p-2'>
              <p className="text-white font-bold text-lg border-b w-min">Organizadores</p>
            </div>
            <img className="w-1/3 p-1 m-2" src="/img/logos/kodigo-logo-white.png" alt="" />
            <img className="w-1/3 p-1 m-2" src="/img/logos/daviplata.png" alt="" />
          </div>
          <div className='p-4'>
            <div className='p-2'>
              <p className='text-white font-bold text-lg border-b w-1/2 md:w-2/3'>Portales Davivienda</p>
            </div>
            <div className="flex flex-col p-2">
              <a className="text-white hover:text-gray-700 pt-2" href="https://www.davivienda.com.sv/#/seguros-personas">Portal Seguros</a>
              <a className="text-white hover:text-gray-700 pt-2" href="https://misfinanzasencasa.davivienda.com/inicio">Portal Mis Finanzas En Casa</a>
              <a className="text-white hover:text-gray-700 pt-2" href="https://jobs.airavirtual.com/davivienda_filiales">Trabaja con nosotros</a>
            </div>
            <div className="p-2 flex items-start justify-start">
              <p className="text-white font-bold text-lg">Redes Sociales:</p>
              <FaFacebook className="text-white mx-2 text-2xl hover:text-[#FF0000] hover:scale-110"/>
              <FaYoutube className="text-white mx-2 text-2xl hover:text-[#FF0000] hover:scale-110"/> 
            </div>
          </div>
        </div>
        <p className='text-white text-center font-bold p-4'>© Kodigo Academia Creativa</p>
        <BotonFlotante />
      </footer>
    </>
  )
}

export default Footer
