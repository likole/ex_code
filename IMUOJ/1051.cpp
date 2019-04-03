#include<iostream>
#include<iomanip>
using namespace std;
#define MAX(a,b,c,ans)\
ans=a>b?a:b;\
ans=ans>c?ans:c
float max(float, float, float);
int main()
{
	float a, b, c, ans;
	cin >> a >> b >> c;
	MAX(a, b, c, ans);
	cout << fixed << setprecision(3) << max(a, b, c) << endl;
	cout << fixed << setprecision(3) <<ans<<endl;
	//cin.get();
	//cin.get();
	return 0;
}
float max(float x, float y, float z)
{
	float ans;
	ans = x > y ? x : y;
	ans = ans > z ? ans : z;
	return ans;
}