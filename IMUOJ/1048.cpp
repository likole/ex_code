#include<iostream>
#include<cmath>
#include<iomanip>
#define S(a,b,c,s)(s=(a+b+c)/2);
#define AREA(a,b,c,s,ans)(ans=sqrt(s*(s-a)*(s-b)*(s-c)));
using namespace std;
int main()
{
	double a, b, c, s, ans;
	cin >> a >> b >> c;
	S(a, b, c, s);
	AREA(a, b, c, s, ans);
	cout << fixed << setprecision(3) << ans << endl;
	//cin.get(); cin.get();
	return 0;
}