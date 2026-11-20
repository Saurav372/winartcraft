<?php

namespace App\Controllers;

use App\Models\InquiryModel;

class Contact extends BaseController
{
    public function send()
    {
        $rawFields = $this->request->getPost('form_fields');
        $name = is_array($rawFields) && isset($rawFields['name']) ? $rawFields['name'] : $this->request->getPost('name');
        $email = is_array($rawFields) && isset($rawFields['email']) ? $rawFields['email'] : $this->request->getPost('email');
        $message = is_array($rawFields) && isset($rawFields['message']) ? $rawFields['message'] : $this->request->getPost('message');

        // Validation
        if (empty($name) || empty($email)) {
            return redirect()->back()->withInput()->with('error', 'Please provide both your name and email address.');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->withInput()->with('error', 'Please provide a valid email address.');
        }

        // Save to Database
        $inquiryModel = new InquiryModel();
        $inquiryModel->insert([
            'name'    => esc($name),
            'email'   => esc($email),
            'message' => esc($message ?? ''),
            'status'  => 'unread',
        ]);

        log_message('info', "New Contact Inquiry saved for {$name} ({$email})");

        return redirect()->to(base_url('/#contact'))->with('success', 'Thank you! Your message has been sent successfully. We will get back to you shortly.');
    }
}
