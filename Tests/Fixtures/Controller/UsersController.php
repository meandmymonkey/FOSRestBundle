<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Tests\Fixtures\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    public function getUsersAction()
    {} // [GET] /users

    public function getUserAction($slug)
    {} // [GET] /users/{slug}

    public function postUsersAction()
    {} // [POST] /users

    public function patchUsersAction()
    {} // [PATCH] /users

    public function putUserAction($slug)
    {} // [PUT] /users/{slug}

    public function patchUserAction($slug)
    {} // [PATCH] /users/{slug}

    public function lockUserAction($slug)
    {} // [POST] /users/{slug}/lock

    public function getUserCommentsAction($slug)
    {} // [GET] /users/{slug}/comments

    public function getUserCommentAction($slug, $id)
    {} // [GET] /users/{slug}/comments/{id}

    public function deleteUserCommentAction($slug, $id)
    {} // [DELETE] /users/{slug}/comments/{id}

    public function banUserAction($slug, $id)
    {} // [POST] /users/{slug}/ban

    public function voteUserCommentAction($slug, $id)
    {} // [POST] /users/{slug}/comments/{id}/vote

    public function _userbarAction()
    {} // NO route

    public function check_usernameUsersAction()
    {} // [GET] /users/check_username

    // conventional HATEOAS actions below

    public function newUsersAction()
    {
    } // [GET] /users/new

    public function editUserAction($slug)
    {} // [GET] /user/{slug}/edit

    public function removeUserAction($slug)
    {} // [GET] /user/{slug}/remove

    public function newUserCommentsAction($slug)
    {} // [GET] /users/{slug}/comments/new

    public function editUserCommentAction($slug, $id)
    {} // [GET] /users/{slug}/comments/{id}/edit

    public function removeUserCommentAction($slug, $id)
    {} // [GET] /users/{slug}/comments/{id}/remove

    public function hideUserCommentAction($userId, $commentId)
    {} // [POST] /users/{userId}/comments/{commentId}

    public function getFooBarsAction($foo)
    {} // [GET] /foos/{foo}/bars
}
