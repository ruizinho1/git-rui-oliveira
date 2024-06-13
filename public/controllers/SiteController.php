<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\UsersSearch;
use app\models\ResetPasswordForm;
use app\models\Users;
use app\models\PasswordResetRequestForm;

$model = new \app\models\PasswordResetRequestForm();

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'registos', 'noticias'],
                'rules' => [
                    [
                        'actions' => ['logout', 'registos', 'noticias'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $noticias = \app\models\Noticias::find()->all();
    
        return $this->render('index', [
            'noticias' => $noticias,
        ]);    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionRegistos()
{
    $searchModel = new UsersSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    return $this->render('/users/index', [
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
    ]);
}

public function actionNoticias()
{
    // Aqui você pode adicionar lógica para exibir todas as notícias ou redirecionar para uma ação específica
    return $this->render('noticias');
}

public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Verifique seu e-mail para obter mais instruções.');
                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Desculpe, não conseguimos enviar o e-mail de redefinição de senha.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'Nova senha salva com sucesso.');
            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionChangeCarImage() {
        if (Yii::$app->request->isAjax) {
            $type = Yii::$app->request->post('type');
            $color = Yii::$app->request->post('color');
            $imagePath = Url::to("@web/images/{$type}/{$color}.jpg");
            return Json::encode(['imagePath' => $imagePath]);
        }
    }

    public function actionNoticia1()
    {
        return $this->render('news1');
    }

    public function actionNoticia2()
    {
        return $this->render('news2');
    }

    public function actionNoticia3()
    {
        return $this->render('news3');
    }

    public function actionNoticia4()
    {
        return $this->render('news4');
    }

    public function actionNoticia5()
    {
        return $this->render('news5');
    }

    public function actionNoticia6()
    {
        return $this->render('news6');
    }
}
