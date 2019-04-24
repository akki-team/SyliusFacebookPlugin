<?php

declare(strict_types=1);

namespace Tests\Setono\SyliusFacebookTrackingPlugin\Behat\Context\Transform;

use Behat\Behat\Context\Context;
use Setono\SyliusFacebookTrackingPlugin\Repository\PixelRepositoryInterface;

final class PixelContext implements Context
{
    /**
     * @var PixelRepositoryInterface
     */
    private $pixelRepository;

    public function __construct(PixelRepositoryInterface $pixelRepository)
    {
        $this->pixelRepository = $pixelRepository;
    }

    /**
     * @Transform :pixel
     */
    public function getPixelByPixelId($pixel)
    {
        return $this->pixelRepository->findOneBy([
            'pixelId' => $pixel
        ]);
    }
}
