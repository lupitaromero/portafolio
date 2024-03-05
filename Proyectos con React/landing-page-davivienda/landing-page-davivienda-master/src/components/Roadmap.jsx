import React, { Fragment } from 'react'

export default function Roadmap({ events }) {
  return (
      <div className='flex items-center justify-center flex-col gap-y-3 w-full my-4 p-4'>
          <Circle />
          { events.map((event, key) => {
            return <Fragment key={key}>
              <div className='grid grid-cols-[1fr_auto_1fr] gap-x-2 items-center mx-auto'>
                {event.direction === 'left' ? (
                  <EventCard heading={event.heading} subHeading={event.subHeading} />
                ) : (
                  <DateR date={event.date} />
                )
                }
                <Pillar />
                {event.direction === 'right' ? (
                  <EventCard heading={event.heading} subHeading={event.subHeading} />
                ) : (
                  <DateL date={event.date} />
                )
                }
              </div>
              {key < events.length - 1 && <Circle />}
            </Fragment>
          })}
          <Circle />
      </div>
  )
}

const Circle = () => {
  return (
    <div className='bg-gradient-to-r from-blue-800 to-teal-500 rounded-full w-4 h-4 mx-auto'>

    </div>
  )
}

const Pillar = () => {
  return (
    <div className='bg-gradient-to-b from-yellow-600 to-yellow-300 rounded-b-full rounded-t-full w-2 h-full  mx-auto'>

    </div>
  )
}

const EventCard = ({ heading, subHeading }) => {
  return (
    <div className='transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-2xl flex flex-col gap-y-2 border shadow-md rounded-xl p-4 bg-gradient-to-r from-red-800 to-red-500 '>
      <div className='text-white font-bold text-lg border-b'>{heading}</div>
      <div className='text-sm text-gray-100 font-semibold '>{subHeading}</div>
    </div>
  )
}

const DateL = ({ date }) => {
  return (
    <div className='flex justify-start text-black text-lg text-center font-bold'>{date}</div>
  )
}

const DateR = ({ date }) => {
  return (
    <div className='flex justify-end text-black text-lg text-center font-bold'>{date}</div>
  )
}