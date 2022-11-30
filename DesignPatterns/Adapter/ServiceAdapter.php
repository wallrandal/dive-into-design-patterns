<?php

namespace DesignPatterns\Adapter;

/**
 * O ServiceAdapter serve como uma ponte entre
 * o Client e o IncompatibleService, de modo que
 * ele transforma e adapta os dados
 * para que a comunicação esteja de acordo com o
 * padrão.
 */
class ServiceAdapter implements DataInterface
{   
	/**
	 * @return string
	 */
	public function retrieveMessage(): string
    {
        $service = new IncompatibleService();
        $data = $service->retrieveIncompatibleData();
        return "{$data[0]} {$data[1]} {$data[2]}";
	}
}