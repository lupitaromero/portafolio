import React from 'react';

export default function RoadmapTitle() {
  return (
    <div className="bg-cover flex flex-col items-center justify-center md:items-start md:justify-end rounded-[1rem] m-4 shadow-2xl md:h-[500px]" style={{ backgroundImage: `url(/img/uni.jpeg)` }}>
      <div className='p-[1rem] h-[60vh] flex items-end justify-start'>
        <h1 className='text-4xl md:text-5xl font-bold text-white mb-0 md:text-left'><span className='text-red-700'>Hackathon</span> DAVIVIENDA</h1>
      </div>
    </div>
  )
}
