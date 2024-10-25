<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * ユーザーをお気に入りするアクション。
     *
     * @param  $id  相手ユーザーのid
     * @return \Illuminate\Http\Response
     */
     public function store(string $id)
     {
         // 認証済みユーザー（閲覧者）が、 idのユーザーをお気に入りする
         \Auth::user()->favorite(intval($id));
         // 前のURLへリダイレクトさせる
         return back();
     }
     
     /**
     * ユーザーをお気に入り解除するアクション。
     *
     * @param  $id  相手ユーザーのid
     * @return \Illuminate\Http\Response
     */
     public function destroy(string $id)
     {
         // 認証済みユーザー（閲覧者）が、 idのユーザーをお気に入り解除する
         \Auth::user()->unfavorite(intval($id));
         // 前のURLへリダイレクトさせる
         return back();
     }
}
