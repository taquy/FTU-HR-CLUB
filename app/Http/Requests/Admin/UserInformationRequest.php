<?php namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseRequest;
use App\Repositories\UserInformationRepositoryInterface;

class UserInformationRequest extends BaseRequest
{

    /** @var \App\Repositories\UserInformationRepositoryInterface */
    protected $userInformationRepository;

    public function __construct(UserInformationRepositoryInterface $userInformationRepository)
    {
        $this->userInformationRepository = $userInformationRepository;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->userInformationRepository->rules();
    }

    public function messages()
    {
        return $this->userInformationRepository->messages();
    }

}
