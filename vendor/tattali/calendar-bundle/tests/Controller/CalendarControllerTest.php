<?php

declare(strict_types=1);

namespace CalendarBundle\Tests\Controller;

use CalendarBundle\CalendarEvents;
use CalendarBundle\Controller\CalendarController;
use CalendarBundle\Entity\Event;
use CalendarBundle\Event\CalendarEvent;
use CalendarBundle\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\PhpUnit\ProphecyTrait;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CalendarControllerTest extends TestCase
{
    use ProphecyTrait;

    private ObjectProphecy|CalendarEvent $calendarEvent;
    private Event|ObjectProphecy $event;
    private ObjectProphecy|EventDispatcherInterface $eventDispatcher;
    private Request|ObjectProphecy $request;
    private SerializerInterface|ObjectProphecy $serializer;
    private CalendarController $controller;

    public function setUp(): void
    {
        $this->calendarEvent = $this->prophesize(CalendarEvent::class);
        $this->event = $this->prophesize(Event::class);
        $this->eventDispatcher = $this->prophesize(EventDispatcherInterface::class);
        $this->request = $this->prophesize(Request::class);
        $this->serializer = $this->prophesize(SerializerInterface::class);

        $this->controller = new CalendarController(
            $this->eventDispatcher->reveal(),
            $this->serializer->reveal()
        );
    }

    public function testItProvidesAnEventsFeedForACalendar(): void
    {
        $this->request->get('start')->willReturn('2016-03-01');
        $this->request->get('end')->willReturn('2016-03-19 15:11:00');
        $this->request->get('filters', '{}')->willReturn('{}');

        $this->calendarEvent->getEvents()->willReturn([$this->event]);

        $this->eventDispatcher(Argument::type(CalendarEvent::class), CalendarEvents::SET_DATA);

        $data = json_encode([
            [
                'title' => 'Birthday!',
                'start' => '2016-03-01',
                'allDay' => true,
            ],
            [
                'title' => 'Flight to somewhere sunny',
                'start' => '2016-03-12T08:55:00Z',
                'allDay' => false,
                'end' => '2016-03-12T11:50:00Z',
            ],
        ]);

        $this->serializer->serialize([$this->event])
            ->willReturn($data)
        ;

        $response = $this->controller->loadAction($this->request->reveal());

        $this->assertInstanceOf(Response::class, $response);

        $this->assertEquals('application/json', $response->headers->get('Content-Type'));
        $this->assertEquals($data, $response->getContent());
        $this->assertEquals(Response::HTTP_OK, $response->getStatusCode());
    }

    public function testItNotFindAnyEvents(): void
    {
        $this->request->get('start')->willReturn('2016-03-01');
        $this->request->get('end')->willReturn('2016-03-19 15:11:00');
        $this->request->get('filters', '{}')->willReturn('{}');

        $this->calendarEvent->getEvents()->willReturn([$this->event]);
        $this->eventDispatcher(Argument::type(CalendarEvent::class), CalendarEvents::SET_DATA);

        $data = '';

        $this->serializer->serialize([$this->event])
            ->willReturn($data)
        ;

        $response = $this->controller->loadAction($this->request->reveal());

        $this->assertInstanceOf(Response::class, $response);

        $this->assertEquals('application/json', $response->headers->get('Content-Type'));
        $this->assertEquals($data, $response->getContent());
        $this->assertEquals(Response::HTTP_NO_CONTENT, $response->getStatusCode());
    }

    private function eventDispatcher($event, ?string $eventName = null): void
    {
        $this->eventDispatcher
            ->dispatch($event, $eventName)
            ->willReturn($this->calendarEvent)
        ;
    }
}
